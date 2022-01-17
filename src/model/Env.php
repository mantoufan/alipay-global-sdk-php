<?php
namespace Mantoufan\model;

class Env
{
    public $terminalType;
    public $osType;
    public $userAgent;
    public $deviceTokenId;
    public $clientIp;
    public $cookieId;
    public $storeTerminalId;
    public $storeTerminalRequestTime;
    public $extendInfo;

    /**
     * @return String
     */
    public function getTerminalType()
    {
        return $this->terminalType;
    }

    /**
     * @param String $terminalType
     */
    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
    }

    /**
     * @return OsType
     */
    public function getOsType()
    {
        return $this->osType;
    }

    /**
     * @param OsType $osType
     */
    public function setOsType($osType)
    {
        $this->osType = $osType;
    }

    /**
     * @return String
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param String $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @return String
     */
    public function getDeviceTokenId()
    {
        return $this->deviceTokenId;
    }

    /**
     * @param String $deviceTokenId
     */
    public function setDeviceTokenId($deviceTokenId)
    {
        $this->deviceTokenId = $deviceTokenId;
    }

    /**
     * @return String
     */
    public function getClientIp()
    {
        return $this->clientIp;
    }

    /**
     * @param String $clientIp
     */
    public function setClientIp($clientIp)
    {
        $this->clientIp = $clientIp;
    }

    /**
     * @return String
     */
    public function getCookieId()
    {
        return $this->cookieId;
    }

    /**
     * @param String $cookieId
     */
    public function setCookieId($cookieId)
    {
        $this->cookieId = $cookieId;
    }

    /**
     * @return String
     */
    public function getStoreTerminalId()
    {
        return $this->storeTerminalId;
    }

    /**
     * @param String $storeTerminalId
     */
    public function setStoreTerminalId($storeTerminalId)
    {
        $this->storeTerminalId = $storeTerminalId;
    }

    /**
     * @return String
     */
    public function getStoreTerminalRequestTime()
    {
        return $this->storeTerminalRequestTime;
    }

    /**
     * @param String $storeTerminalRequestTime
     */
    public function setStoreTerminalRequestTime($storeTerminalRequestTime)
    {
        $this->storeTerminalRequestTime = $storeTerminalRequestTime;
    }

    /**
     * @return String
     */
    public function getExtendInfo()
    {
        return $this->extendInfo;
    }

    /**
     * @param String $extendInfo
     */
    public function setExtendInfo($extendInfo)
    {
        $this->extendInfo = $extendInfo;
    }
}
