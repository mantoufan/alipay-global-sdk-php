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
use Mantoufan\request\pay\AlipayPayRequest;

class AliPayGlobal
{
    public $alipayClient;
    public $client_id;
    public $is_sandbox;
    public function __construct($params)
    {
        $params = array_merge(array(
            'client_id' => '',
            'endpoint_area' => 'ASIA',
            'merchantPrivateKey' => '',
            'alipayPublicKey' => '',
            'is_sandbox' => false,
        ), $params);
        $this->client_id = $params['client_id'];
        $this->is_sandbox = $params['is_sandbox'];
        $this->alipayClient = new DefaultAlipayClient(
            constant(Endpoint::class . '::' . $params['endpoint_area']),
            $params['merchantPrivateKey'],
            $params['alipayPublicKey']
        );
    }
    public static function CreateOredrId()
    {
        list($ms) = explode(' ', microtime());
        return 'ORDER-' . date('YmdHis') . ($ms * 1000000) . rand(00, 99);
    }

    public static function CreatePaymentRequestId()
    {
        list($ms) = explode(' ', microtime());
        return 'PAY-' . date('YmdHis') . ($ms * 1000000) . rand(00, 99);
    }

    public function checkout($params)
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
        $alipayPayRequest->setPath(
            '/ams/' . ($this->is_sandbox ? 'sandbox' : '') . '/api/v1/payments/pay'
        );
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
}