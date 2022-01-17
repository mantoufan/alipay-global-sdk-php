<?php
namespace Mantoufan\model;

class Shipping
{
    public $shippingName;
    public $shippingAddress;
    public $shippingCarrier;
    public $shippingPhoneNo;

    /**
     * @return String
     */
    public function getShippingName()
    {
        return $this->shippingName;
    }

    /**
     * @param String $shippingName
     */
    public function setShippingName($shippingName)
    {
        $this->shippingName = $shippingName;
    }

    /**
     * @return Address
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param Address $shippingAddress
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return String
     */
    public function getShippingCarrier()
    {
        return $this->shippingCarrier;
    }

    /**
     * @param String $shippingCarrier
     */
    public function setShippingCarrier($shippingCarrier)
    {
        $this->shippingCarrier = $shippingCarrier;
    }

    /**
     * @return String
     */
    public function getShippingPhoneNo()
    {
        return $this->shippingPhoneNo;
    }

    /**
     * @param String $shippingPhoneNo
     */
    public function setShippingPhoneNo($shippingPhoneNo)
    {
        $this->shippingPhoneNo = $shippingPhoneNo;
    }
}
