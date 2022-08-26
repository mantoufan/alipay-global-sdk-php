<?php
namespace Mantoufan\model;

class NotifyPaymentRequest
{
    public $httpMethod;
    public $path;
    public $clientId;
    public $rsqTime;
    public $rsqBody;
    public $signature;

    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    public function setHttpMethod($httpMethod)
    {
        $this->httpMethod = $httpMethod;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    public function getRsqTime()
    {
        return $this->rsqTime;
    }

    public function setRsqTime($rsqTime)
    {
        $this->rsqTime = $rsqTime;
    }

    public function getRsqBody()
    {
        return $this->rsqBody;
    }

    public function setRsqBody($rsqBody)
    {
        $this->rsqBody = $rsqBody;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function setSignature($signature)
    {
        $this->signature = $signature;
    }
}
