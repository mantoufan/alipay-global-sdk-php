<?php
namespace Mantoufan\model;

class MerchantRegistrationInfo
{
    public $referenceMerchantId;
    public $merchantDisplayName;
    public $merchantMCC;
    public $logo;
    public $websites;
    public $merchantAddress;
    public $registrationDetail;

    /**
     * @return mixed
     */
    public function getReferenceMerchantId()
    {
        return $this->referenceMerchantId;
    }

    /**
     * @param mixed $referenceMerchantId
     */
    public function setReferenceMerchantId($referenceMerchantId)
    {
        $this->referenceMerchantId = $referenceMerchantId;
    }

    /**
     * @return mixed
     */
    public function getMerchantDisplayName()
    {
        return $this->merchantDisplayName;
    }

    /**
     * @param mixed $merchantDisplayName
     */
    public function setMerchantDisplayName($merchantDisplayName)
    {
        $this->merchantDisplayName = $merchantDisplayName;
    }

    /**
     * @return mixed
     */
    public function getMerchantMCC()
    {
        return $this->merchantMCC;
    }

    /**
     * @param mixed $merchantMCC
     */
    public function setMerchantMCC($merchantMCC)
    {
        $this->merchantMCC = $merchantMCC;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getWebsites()
    {
        return $this->websites;
    }

    /**
     * @param mixed $websites
     */
    public function setWebsites($websites)
    {
        $this->websites = $websites;
    }

    /**
     * @return mixed
     */
    public function getMerchantAddress()
    {
        return $this->merchantAddress;
    }

    /**
     * @param mixed $merchantAddress
     */
    public function setMerchantAddress($merchantAddress)
    {
        $this->merchantAddress = $merchantAddress;
    }

    /**
     * @return mixed
     */
    public function getRegistrationDetail()
    {
        return $this->registrationDetail;
    }

    /**
     * @param mixed $registrationDetail
     */
    public function setRegistrationDetail($registrationDetail)
    {
        $this->registrationDetail = $registrationDetail;
    }
}
