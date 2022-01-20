<?php
namespace Mantoufan;

use Mantoufan\DefaultAlipayClient;
use Mantoufan\model\Amount;
use Mantoufan\model\ChinaExtraTransInfo;
use Mantoufan\model\CustomerBelongsTo;
use Mantoufan\model\Endpoint;
use Mantoufan\model\Env;
use Mantoufan\model\ExtendInfo;
use Mantoufan\model\Order;
use Mantoufan\model\PaymentMethod;
use Mantoufan\model\ProductCodeType;
use Mantoufan\model\SettlementStrategy;
use Mantoufan\model\TerminalType;
use Mantoufan\request\notify\AlipayAcNotify;
use Mantoufan\request\pay\AlipayPayRequest;
use Mantoufan\SignatureTool;
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
        $this->alipayClient = new DefaultAlipayClient(
            constant(Endpoint::class . '::' . $params['endpoint_area']),
            $this->merchantPrivateKey,
            $this->alipayPublicKey
        );
    }

    function CreateOredrId()
    {
        list($ms) = explode(' ', microtime());
        return 'ORDER-' . date('YmdHis') . ($ms * 1000000) . rand(00, 99);
    }

    function CreatePaymentRequestId()
    {
        list($ms) = explode(' ', microtime());
        return 'PAY-' . date('YmdHis') . ($ms * 1000000) . rand(00, 99);
    }

    function getPath($key)
    {
        return str_replace('{sandbox}', $this->is_sandbox ? 'sandbox/' : '', self::PATHS[$key]);
    }

    function cashier($params)
    {
        $params = array_merge(array(
            'notify_url' => '',
            'return_url' => '',
            'amount' => array(
                'currency' => 'USD',
                'value' => '',
            ),
            'order' => array(
                'id' => null,
                'desc' => '',
                'extend_info' => array(
                    'china_extra_trans_info' => array(
                        'business_type' => '',
                    ),
                ),
            ),
            'payment_request_id' => null,
        ), $params);

        $alipayPayRequest = new AlipayPayRequest();
        $alipayPayRequest->setPath($this->getPath('payments/pay'));
        $alipayPayRequest->setClientId($this->client_id);

        $alipayPayRequest->setProductCode(ProductCodeType::CASHIER_PAYMENT);
        $alipayPayRequest->setPaymentNotifyUrl($params['notify_url']);
        $alipayPayRequest->setPaymentRedirectUrl($params['return_url']);
        $alipayPayRequest->setPaymentRequestId($params['payment_request_id'] ?? self::CreatePaymentRequestId());

        $paymentMethod = new PaymentMethod();
        $paymentMethod->setPaymentMethodType(CustomerBelongsTo::ALIPAY_CN);
        $alipayPayRequest->setPaymentMethod($paymentMethod);

        $amount = new Amount();
        $amount->setCurrency($params['amount']['currency']);
        $amount->setValue($params['amount']['value']);

        $order = new Order();
        $order->setOrderDescription($params['order']['desc']);
        $order->setReferenceOrderId($params['order']['id'] ?? self::CreateOredrId());
        $order->setOrderAmount($amount);

        $chinaExtraTransInfo = new ChinaExtraTransInfo();
        $chinaExtraTransInfo->setBusinessType($params['order']['extend_info']['china_extra_trans_info']['business_type']);
        $extendInfo = $chinaExtraTransInfo;

        $extendInfo = new ExtendInfo();
        $extendInfo->setChinaExtraTransInfo($chinaExtraTransInfo);
        $order->setExtendInfo($extendInfo . '');

        $env = new Env();
        $env->setTerminalType(TerminalType::WEB);
        $order->setEnv($env);

        $alipayPayRequest->setPaymentAmount($amount);
        $alipayPayRequest->setOrder($order);

        $settlementStrategy = new SettlementStrategy();
        $settlementStrategy->setSettlementCurrency($params['amount']['currency']);
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
            throw Exception('Invalid Signature');
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

    function agreement($params)
    {
        $params = array_merge(array(
            'notify_url' => '',
            'return_url' => '',
            'amount' => array(
                'currency' => 'USD',
                'value' => '',
            ),
            'order' => array(
                'id' => null,
                'desc' => '',
                'extend_info' => array(
                    'china_extra_trans_info' => array(
                        'business_type' => '',
                    ),
                ),
            ),
            'payment_request_id' => null,
        ), $params);

        $alipayPayRequest = new AlipayPayRequest();
        $alipayPayRequest->setPath($this->getPath('payments/pay'));
        $alipayPayRequest->setClientId($this->client_id);

        $alipayPayRequest->setProductCode(ProductCodeType::AGREEMENT_PAYMENT);
        $alipayPayRequest->setPaymentNotifyUrl($params['notify_url']);
        $alipayPayRequest->setPaymentRedirectUrl($params['return_url']);
        $alipayPayRequest->setPaymentRequestId($params['payment_request_id'] ?? self::CreatePaymentRequestId());

        $paymentMethod = new PaymentMethod();
        $paymentMethod->setPaymentMethodType(CustomerBelongsTo::ALIPAY_CN);
        $alipayPayRequest->setPaymentMethod($paymentMethod);

        $amount = new Amount();
        $amount->setCurrency($params['amount']['currency']);
        $amount->setValue($params['amount']['value']);

        $order = new Order();
        $order->setOrderDescription($params['order']['desc']);
        $order->setReferenceOrderId($params['order']['id'] ?? self::CreateOredrId());
        $order->setOrderAmount($amount);

        $chinaExtraTransInfo = new ChinaExtraTransInfo();
        $chinaExtraTransInfo->setBusinessType($params['order']['extend_info']['china_extra_trans_info']['business_type']);
        $extendInfo = $chinaExtraTransInfo;

        $extendInfo = new ExtendInfo();
        $extendInfo->setChinaExtraTransInfo($chinaExtraTransInfo);
        $order->setExtendInfo($extendInfo . '');

        $env = new Env();
        $env->setTerminalType(TerminalType::WEB);
        $order->setEnv($env);

        $alipayPayRequest->setPaymentAmount($amount);
        $alipayPayRequest->setOrder($order);

        $settlementStrategy = new SettlementStrategy();
        $settlementStrategy->setSettlementCurrency($params['amount']['currency']);
        $alipayPayRequest->setSettlementStrategy($settlementStrategy);

        try {
            return $this->alipayClient->execute($alipayPayRequest);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
