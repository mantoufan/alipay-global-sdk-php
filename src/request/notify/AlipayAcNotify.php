<?php
namespace Mantoufan\request\notify;

use Mantoufan\model\NotifyPaymentRequest;
use Mantoufan\tool\SignatureTool;

class AlipayAcNotify
{
    public function __construct($params)
    {
        $this->merchantPrivateKey = $params['merchantPrivateKey'];
        $this->httpMethod = $params['httpMethod'];
        $this->path = $params['path'];
        $this->clientId = $params['clientId'];
        $this->rsqTime = $params['rsqTime'];
        $this->rsqBody = $params['rsqBody'];
        $this->signature = $params['signature'];
        $this->notifyPaymentRequest = new NotifyPaymentRequest();
    }

    public function getNotifyPaymentRequest()
    {
        $this->notifyPaymentRequest->setHttpMethod($this->httpMethod);
        $this->notifyPaymentRequest->setPath($this->path);
        $this->notifyPaymentRequest->setClientId($this->clientId);
        $this->notifyPaymentRequest->setRsqTime($this->rsqTime);
        $this->notifyPaymentRequest->setRsqBody($this->rsqBody);
        if (preg_match('/signature=(?<signature>.*?)(?:$|,)/', $this->signature, $matches)) {
            $this->notifyPaymentRequest ->setSignature($matches['signature']);
        }
        return $this->notifyPaymentRequest ;
    }

    public function getNotifyResponse()
    {
        return '{"result":{"resultCode":"SUCCESS","resultMessage":"success","resultStatus":"S"}}';
    }
    
    public function sendNotifyResponse()
    {
        echo $this->getNotifyResponse();
    }

    public function getNotifyResponseWithRSA() {
        $reqTime = date('c', time());
        $reqBody = $this->getNotifyResponse();
        return array(
            'headers' => array(
                'content-type' => 'application/json; charset=UTF-8',
                'response-time' => $reqTime,
                'client-id' => $this->notifyPaymentRequest->getClientId(),
                'signature' => 'algorithm=RSA256,keyVersion=1,signature=' . SignatureTool::sign(
                    $this->notifyPaymentRequest->getHttpMethod(),
                    $this->notifyPaymentRequest->getPath(),
                    $this->notifyPaymentRequest->getClientId(),
                    $reqTime,
                    $reqBody,
                    $this->merchantPrivateKey
                )
            ),
            'body' => $reqBody
        );
    }

    public function sendNotifyResponseWithRSA() {
        $notifyResponseWithRSA = $this->getNotifyResponseWithRSA();
        foreach ($notifyResponseWithRSA['headers'] as $header => $value) {
            header($header . ':' . $value);
        }
        echo $notifyResponseWithRSA['body'];
    }

    public function getHttpMethod()
    {
        return $this->notifyPaymentRequest->getHttpMethod();
    }

    public function getPath()
    {
        return $this->notifyPaymentRequest->getPath();
    }

    public function getClientId()
    {
        return $this->notifyPaymentRequest->getClientId();
    }

    public function getRsqTime()
    {
        return $this->notifyPaymentRequest->getRsqTime();
    }

    public function getRsqBody()
    {
        return $this->notifyPaymentRequest->getRsqBody();
    }

    public function getSignature()
    {
        return $this->notifyPaymentRequest->getSignature();
    }
}
