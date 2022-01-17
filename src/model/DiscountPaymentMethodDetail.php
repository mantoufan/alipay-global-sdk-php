<?php
namespace Mantoufan\model;

class DiscountPaymentMethodDetail
{
    public $discountId;
    public $availableAmount;
    public $discountName;
    public $discountDescription;
    public $paymentMethodDetailMetadata;

    /**
     * @return mixed
     */
    public function getDiscountId()
    {
        return $this->discountId;
    }

    /**
     * @param mixed $discountId
     */
    public function setDiscountId($discountId)
    {
        $this->discountId = $discountId;
    }

    /**
     * @return mixed
     */
    public function getAvailableAmount()
    {
        return $this->availableAmount;
    }

    /**
     * @param mixed $availableAmount
     */
    public function setAvailableAmount($availableAmount)
    {
        $this->availableAmount = $availableAmount;
    }

    /**
     * @return mixed
     */
    public function getDiscountName()
    {
        return $this->discountName;
    }

    /**
     * @param mixed $discountName
     */
    public function setDiscountName($discountName)
    {
        $this->discountName = $discountName;
    }

    /**
     * @return mixed
     */
    public function getDiscountDescription()
    {
        return $this->discountDescription;
    }

    /**
     * @param mixed $discountDescription
     */
    public function setDiscountDescription($discountDescription)
    {
        $this->discountDescription = $discountDescription;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodDetailMetadata()
    {
        return $this->paymentMethodDetailMetadata;
    }

    /**
     * @param mixed $paymentMethodDetailMetadata
     */
    public function setPaymentMethodDetailMetadata($paymentMethodDetailMetadata)
    {
        $this->paymentMethodDetailMetadata = $paymentMethodDetailMetadata;
    }
}
