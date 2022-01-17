<?php
namespace Mantoufan\model;

class Address
{
    public $region;
    public $state;
    public $city;
    public $address1;
    public $address2;
    public $zipCode;
    public $label;
    /**
     * @return String
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param String $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return String
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param String $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return String
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return Address
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param Address $address1
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    /**
     * @return Address
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param Address $address2
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    /**
     * @return String
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param String $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }
}
