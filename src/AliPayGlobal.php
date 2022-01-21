<?php
namespace Mantoufan;

use Mantoufan\client\AcAlipayClient;
use Mantoufan\model\Amount;
use Mantoufan\model\Buyer;
use Mantoufan\model\ChinaExtraTransInfo;
use Mantoufan\model\Endpoint;
use Mantoufan\model\Env;
use Mantoufan\model\ExtendInfo;
use Mantoufan\model\Goods;
use Mantoufan\model\Merchant;
use Mantoufan\model\Order;
use Mantoufan\model\PaymentMethod;
use Mantoufan\model\ProductCodeType;
use Mantoufan\model\SettlementStrategy;
use Mantoufan\request\auth\AlipayAuthConsultRequest;
use Mantoufan\request\notify\AlipayAcNotify;
use Mantoufan\request\pay\AlipayPayRequest;
use Mantoufan\tool\SignatureTool;
use \Exception;

class AliPayGlobal
{
    const PATHS = array(
        'payments/pay' => '/ams/{sandbox}api/v1/payments/pay',
    );
    private $alipayClient;
    private $client_id;
    private $is_sandbox;
    private $alipayPublicKey;
    private $merchantPrivateKey;

    function __construct($params)
    {
        $params = array_merge(array(
            'client_id' => '',
            'endpoint_area' => 'ASIA',
            'merchantPrivateKey' => '',
            'alipayPublicKey' => '',
            'is_sandbox' => false,
        ), $params);
        $this->alipayPublicKey = $params['alipayPublicKey'];
        $this->merchantPrivateKey = $params['merchantPrivateKey'];
        $this->client_id = $params['client_id'];
        $this->is_sandbox = $params['is_sandbox'];
        $this->alipayClient = new AcAlipayClient(
            constant(Endpoint::class . '::' . $params['endpoint_area']),
            $this->merchantPrivateKey,
            $this->alipayPublicKey
        );
    }

    function getPath($key)
    {
        return str_replace('{sandbox}', $this->is_sandbox ? 'sandbox/' : '', self::PATHS[$key]);
    }

    function payCashier($params)
    {
        $params = array_merge(array(
            'notify_url' => null,
            'return_url' => null,
            'amount' => array(
                'currency' => null,
                'value' => null,
            ),
            'order' => array(
                'id' => null,
                'desc' => null,
                'extend_info' => array(
                    'china_extra_trans_info' => array(
                        'business_type' => null,
                    ),
                ),
            ),
            'payment_request_id' => null,
            'settlement_strategy' => array(
                'currency' => null,
            ),
            'terminal_type' => null,
            'os_type' => null,
            'os_version' => null,
        ), $params);

        $alipayPayRequest = new AlipayPayRequest();
        $alipayPayRequest->setPath($this->getPath('payments/pay'));
        $alipayPayRequest->setClientId($this->client_id);

        $alipayPayRequest->setProductCode(ProductCodeType::CASHIER_PAYMENT);
        $alipayPayRequest->setPaymentNotifyUrl($params['notify_url']);
        $alipayPayRequest->setPaymentRedirectUrl($params['return_url']);
        $alipayPayRequest->setPaymentRequestId($params['payment_request_id'] ?? IdTool::CreatePaymentRequestId());

        $paymentMethod = new PaymentMethod();
        $paymentMethod->setPaymentMethodType($params['customer_belongs_to']);
        $alipayPayRequest->setPaymentMethod($paymentMethod);

        $amount = new Amount();
        $amount->setCurrency($params['amount']['currency']);
        $amount->setValue($params['amount']['value']);

        $order = new Order();
        $order->setOrderDescription($params['order']['desc']);
        $order->setReferenceOrderId($params['order']['id'] ?? IdTool::CreateReferenceOrderId());
        $order->setOrderAmount($amount);

        $chinaExtraTransInfo = new ChinaExtraTransInfo();
        $chinaExtraTransInfo->setBusinessType($params['order']['extend_info']['china_extra_trans_info']['business_type']);
        $extendInfo = $chinaExtraTransInfo;

        $extendInfo = new ExtendInfo();
        $extendInfo->setChinaExtraTransInfo($chinaExtraTransInfo);
        $order->setExtendInfo($extendInfo . '');

        $env = new Env();
        $env->setTerminalType($params['terminal_type']);
        $env->setOsType($params['os_type']);
        $order->setEnv($env);

        $alipayPayRequest->setPaymentAmount($amount);
        $alipayPayRequest->setOrder($order);

        $settlementStrategy = new SettlementStrategy();
        $settlementStrategy->setSettlementCurrency($params['settlement_strategy']['currency']);
        $alipayPayRequest->setSettlementStrategy($settlementStrategy);

        try {
            return $this->alipayClient->execute($alipayPayRequest);
        } catch (Exception $e) {
            throw $e;
        }
    }

    function getNotify()
    {
        $alipayAcNotify = new AlipayAcNotify();
        $notifyPaymentRequest = $alipayAcNotify->getNotifyPaymentRequest();
        $result = SignatureTool::verify(
            $notifyPaymentRequest->getHttpMethod(),
            $_SERVER['PHP_SELF'],
            $notifyPaymentRequest->getClientId(),
            $notifyPaymentRequest->getRsqTime(),
            $notifyPaymentRequest->getRsqBody(),
            $notifyPaymentRequest->getSignature(),
            $this->alipayPublicKey
        );
        if ($result === 0) {
            throw new Exception('Invalid Signature');
        }
        return $notifyPaymentRequest;
    }

    function sendNotifyResponse()
    {
        $alipayAcNotify = new AlipayAcNotify();
        $alipayAcNotify->sendNotifyResponse();
    }

    function sendNotifyResponseWithRSA()
    {
        $alipayAcNotify = new AlipayAcNotify();
        $alipayAcNotify->sendNotifyResponseWithRSA(array(
            'merchantPrivateKey' => $this->merchantPrivateKey,
        ));
    }

    function authConsult($params)
    {
        $params = array_merge(array(
            'customer_belongs_to' => null, // *
            'auth_client_id' => null,
            'auth_redirect_url' => null, // *
            'scopes' => null, // *
            'auth_state' => null, // *
            'terminal_type' => null, // *
            'os_type' => null,
            'os_version' => null,
        ), $params);
        $alipayAuthConsultRequest = new AlipayAuthConsultRequest();
        $alipayAuthConsultRequest->setCustomerBelongsTo($params['customer_belongs_to']);
        $alipayAuthConsultRequest->setAuthClientId($params['auth_client_id']);
        $alipayAuthConsultRequest->setAuthRedirectUrl($params['auth_redirect_url']);
        $alipayAuthConsultRequest->setScopes($params['scopes']);
        $alipayAuthConsultRequest->setAuthState($params['auth_state'] ?? IdTool::CreateAuthState());
        $alipayAuthConsultRequest->setTerminalType($params['terminal_type']);
        $alipayAuthConsultRequest->setOsType($params['os_type']);
        $alipayAuthConsultRequest->setOsVersion($params['os_version']);

        try {
            return $this->alipayClient->execute($alipayAuthConsultRequest);
        } catch (Exception $e) {
            throw $e;
        }
    }

    function authApplyToken()
    {

    }

    function payAgreement($params)
    {
        $params = array_merge(array(
            'notify_url' => null,
            'return_url' => null,
            'amount' => array(
                'currency' => null,
                'value' => null,
            ),
            'order' => array(
                'id' => null,
                'desc' => null,
                'extend_info' => array(
                    'china_extra_trans_info' => array(
                        'business_type' => null,
                    ),
                ),
            ),
            'goods' => array(
                array(
                    'id' => null,
                    'name' => null,
                    'category' => null,
                    'brand' => null,
                    'unit_amount' => null,
                    'quantity' => null,
                    'sku_name' => null,
                ),
            ),
            'merchant' => array(
                'MCC' => null,
                'name' => null,
                'display_name' => null,
                'address' => null,
                'register_date' => null,
                'store' => null,
                'type' => null,
            ),
            'buyer' => array(
                'id' => null,
                'name' => array(
                    'first_name' => null,
                    'last_name' => null,
                ),
                'phone_no' => null,
                'email' => null,
            ),
            'payment_request_id' => null,
            'settlement_strategy' => array(
                'currency' => null,
            ),
        ), $params);

        $alipayPayRequest = new AlipayPayRequest();
        $alipayPayRequest->setPath($this->getPath('payments/pay'));
        $alipayPayRequest->setClientId($this->client_id);

        $alipayPayRequest->setProductCode(ProductCodeType::AGREEMENT_PAYMENT);
        $alipayPayRequest->setPaymentNotifyUrl($params['notify_url']);
        $alipayPayRequest->setPaymentRedirectUrl($params['return_url']);
        $alipayPayRequest->setPaymentRequestId($params['payment_request_id'] ?? IdTool::CreatePaymentRequestId());

        $paymentMethod = new PaymentMethod();
        $paymentMethod->setPaymentMethodType($params['customer_belongs_to']);
        $paymentMethod->setPaymentMethodId();
        $alipayPayRequest->setPaymentMethod($paymentMethod);

        $amount = new Amount();
        $amount->setCurrency($params['amount']['currency']);
        $amount->setValue($params['amount']['value']);
        $alipayPayRequest->setPaymentAmount($amount);

        $order = new Order();
        $order->setOrderDescription($params['order']['desc']);
        $order->setReferenceOrderId($params['order']['id'] ?? IdTool::CreateReferenceOrderId());
        $order->setOrderAmount($amount);

        $chinaExtraTransInfo = new ChinaExtraTransInfo();
        $chinaExtraTransInfo->setBusinessType($params['order']['extend_info']['china_extra_trans_info']['business_type']);
        $extendInfo = $chinaExtraTransInfo;

        $extendInfo = new ExtendInfo();
        $extendInfo->setChinaExtraTransInfo($chinaExtraTransInfo);
        $order->setExtendInfo($extendInfo . '');

        $env = new Env();
        $env->setTerminalType($params['terminal_type']);
        $env->setOsType($params['os_type']);
        $order->setEnv($env);

        $goodsArr = array();
        if (!empty($params['goods'])) {
            foreach ($params['goods'] as $good) {
                $goods = new Goods();
                $goods->setReferenceGoodsId($good['id'] ?? IdTool::CreateReferenceGoodsId());
                $goods->setGoodsName($good['name']);
                $goods->setGoodsCategory($good['category']);
                $goods->setGoodsBrand($good['brand']);
                $goods->setGoodsUnitAmount($good['unit_amount']);
                $goods->setGoodsQuantity($good['quantity']);
                $goods->setGoodsSkuName($good['sku_name']);
                $goodsArr[] = $goods;
            }
            $order->setGoods($goodsArr);
        }
        if (!empty($params['merchant'])) {
            $merchant = new Merchant();
            $merchant->setReferenceMerchantId($params['merchant']['id'] ?? IdTool::CreateReferenceMerchantId());
            $merchant->setMerchantMCC($params['merchant']['MCC']);
            $merchant->setMerchantName($params['merchant']['name']);
            $merchant->setMerchantDisplayName($params['merchant']['display_name']);
            $merchant->setMerchantAddress($params['merchant']['address']);
            $merchant->setMerchantRegisterDate($params['merchant']['register_date']);
            $merchant->setStore($params['merchant']['store']);
            $merchant->setMerchantType($params['merchant']['type']);
            $order->setMerchant($merchant);
        }

        if (!empty($params['buyer'])) {
            $buyer = new Buyer();
            $buyer->setReferenceBuyerId($params['buyer']['id'] ?? IdTool::CreateBuyerId());
            $buyer->setBuyerName($params['buyer']['name']);
            $buyer->setBuyerPhoneNo($params['buyer']['phone_no']);
            $buyer->setBuyerEmail($params['buyer']['email']);
            $order->setBuyer($buyer);
        }

        $alipayPayRequest->setOrder($order);

        $settlementStrategy = new SettlementStrategy();
        $settlementStrategy->setSettlementCurrency($params['settlement_strategy']['currency']);
        $alipayPayRequest->setSettlementStrategy($settlementStrategy);

        $alipayPayRequest->setIsAuthorization(true);

        try {
            return $this->alipayClient->execute($alipayPayRequest);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
