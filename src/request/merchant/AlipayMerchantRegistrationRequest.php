<?php
namespace Mantoufan\request\merchant;

use Mantoufan\request\AlipayRequest;

class AlipayMerchantRegistrationRequest extends AlipayRequest
{
    public $productCodes;
    public $registrationRequestId;
    public $registrationNotifyURL;
    public $merchantInfo;
    public $passThroughInfo;

    /**
     * @return mixed
     */
    public function getProductCodes()
    {
        return $this->productCodes;
    }

    /**
     * @param mixed $productCodes
     */
    public function setProductCodes($productCodes)
    {
        $this->productCodes = $productCodes;
    }

    /**
     * @return mixed
     */
    public function getRegistrationRequestId()
    {
        return $this->registrationRequestId;
    }

    /**
     * @param mixed $registrationRequestId
     */
    public function setRegistrationRequestId($registrationRequestId)
    {
        $this->registrationRequestId = $registrationRequestId;
    }

    /**
     * @return mixed
     */
    public function getRegistrationNotifyURL()
    {
        return $this->registrationNotifyURL;
    }

    /**
     * @param mixed $registrationNotifyURL
     */
    public function setRegistrationNotifyURL($registrationNotifyURL)
    {
        $this->registrationNotifyURL = $registrationNotifyURL;
    }

    /**
     * @return mixed
     */
    public function getMerchantInfo()
    {
        return $this->merchantInfo;
    }

    /**
     * @param mixed $merchantInfo
     */
    public function setMerchantInfo($merchantInfo)
    {
        $this->merchantInfo = $merchantInfo;
    }

    /**
     * @return mixed
     */
    public function getPassThroughInfo()
    {
        return $this->passThroughInfo;
    }

    /**
     * @param mixed $passThroughInfo
     */
    public function setPassThroughInfo($passThroughInfo)
    {
        $this->passThroughInfo = $passThroughInfo;
    }
}
