<?php
namespace Mantoufan\model;

class Merchant
{
    public $referenceMerchantId;
    public $merchantMCC;
    public $merchantName;
    public $merchantDisplayName;
    public $merchantAddress;
    public $merchantRegisterDate;
    public $store;
    public $merchantType;

    /**
     * @return String
     */
    public function getReferenceMerchantId()
    {
        return $this->referenceMerchantId;
    }

    /**
     * @param String $referenceMerchantId
     */
    public function setReferenceMerchantId($referenceMerchantId)
    {
        $this->referenceMerchantId = $referenceMerchantId;
    }

    /**
     * @return String
     */
    public function getMerchantMCC()
    {
        return $this->merchantMCC;
    }

    /**
     * @param String $merchantMCC
     */
    public function setMerchantMCC($merchantMCC)
    {
        $this->merchantMCC = $merchantMCC;
    }

    /**
     * @return String
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * @param String $merchantName
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
    }

    /**
     * @return String
     */
    public function getMerchantDisplayName()
    {
        return $this->merchantDisplayName;
    }

    /**
     * @param String $merchantDisplayName
     */
    public function setMerchantDisplayName($merchantDisplayName)
    {
        $this->merchantDisplayName = $merchantDisplayName;
    }

    /**
     * @return Address
     */
    public function getMerchantAddress()
    {
        return $this->merchantAddress;
    }

    /**
     * @param Address $merchantAddress
     */
    public function setMerchantAddress($merchantAddress)
    {
        $this->merchantAddress = $merchantAddress;
    }

    /**
     * @return String
     */
    public function getMerchantRegisterDate()
    {
        return $this->merchantRegisterDate;
    }

    /**
     * @param String $merchantRegisterDate
     */
    public function setMerchantRegisterDate($merchantRegisterDate)
    {
        $this->merchantRegisterDate = $merchantRegisterDate;
    }

    /**
     * @return Store
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @param Store $store
     */
    public function setStore($store)
    {
        $this->store = $store;
    }

    /**
     * @return mixed
     */
    public function getMerchantType()
    {
        return $this->merchantType;
    }

    /**
     * @param mixed $merchantType
     */
    public function setMerchantType($merchantType)
    {
        $this->merchantType = $merchantType;
    }
}
