<?php
namespace Mantoufan\model;

class Store
{
    public $referenceStoreId;
    public $storeName;
    public $storeMCC;
    public $storeDisplayName;
    public $storeTerminalId;
    public $storeOperatorId;
    public $storeAddress;
    public $storePhoneNo;

    /**
     * @return String
     */
    public function getReferenceStoreId()
    {
        return $this->referenceStoreId;
    }

    /**
     * @param String $referenceStoreId
     */
    public function setReferenceStoreId($referenceStoreId)
    {
        $this->referenceStoreId = $referenceStoreId;
    }

    /**
     * @return String
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @param String $storeName
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
    }

    /**
     * @return String
     */
    public function getStoreMCC()
    {
        return $this->storeMCC;
    }

    /**
     * @param String $storeMCC
     */
    public function setStoreMCC($storeMCC)
    {
        $this->storeMCC = $storeMCC;
    }

    /**
     * @return String
     */
    public function getStoreDisplayName()
    {
        return $this->storeDisplayName;
    }

    /**
     * @param String $storeDisplayName
     */
    public function setStoreDisplayName($storeDisplayName)
    {
        $this->storeDisplayName = $storeDisplayName;
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
    public function getStoreOperatorId()
    {
        return $this->storeOperatorId;
    }

    /**
     * @param String $storeOperatorId
     */
    public function setStoreOperatorId($storeOperatorId)
    {
        $this->storeOperatorId = $storeOperatorId;
    }

    /**
     * @return Address
     */
    public function getStoreAddress()
    {
        return $this->storeAddress;
    }

    /**
     * @param Address $storeAddress
     */
    public function setStoreAddress($storeAddress)
    {
        $this->storeAddress = $storeAddress;
    }

    /**
     * @return String
     */
    public function getStorePhoneNo()
    {
        return $this->storePhoneNo;
    }

    /**
     * @param String $storePhoneNo
     */
    public function setStorePhoneNo($storePhoneNo)
    {
        $this->storePhoneNo = $storePhoneNo;
    }
}
