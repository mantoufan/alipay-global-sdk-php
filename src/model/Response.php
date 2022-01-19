<?php
namespace Mantoufan\model;

class Response
{
    public $httpMethod;
    public $clientId;
    public $rspTime;
    public $rspBody;
    public $signature;

    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    public function setHttpMethod($httpMethod)
    {
        $this->httpMethod = $httpMethod;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    public function getRspTime()
    {
        return $this->rspTime;
    }

    public function setRspTime($rspTime)
    {
        $this->rspTime = $rspTime;
    }

    public function getRspBody()
    {
        return $this->rspBody;
    }

    public function setRspBody($rspBody)
    {
        $this->rspBody = $rspBody;
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
