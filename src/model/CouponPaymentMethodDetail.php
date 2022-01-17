<?php
namespace Mantoufan\model;

class CouponPaymentMethodDetail
{
    public $couponId;
    public $availableAmount;
    public $couponName;
    public $couponDescription;
    public $couponExpireTime;
    public $paymentMethodDetailMetadatal;

    /**
     * @return mixed
     */
    public function getCouponId()
    {
        return $this->couponId;
    }

    /**
     * @param mixed $couponId
     */
    public function setCouponId($couponId)
    {
        $this->couponId = $couponId;
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
    public function getCouponName()
    {
        return $this->couponName;
    }

    /**
     * @param mixed $couponName
     */
    public function setCouponName($couponName)
    {
        $this->couponName = $couponName;
    }

    /**
     * @return mixed
     */
    public function getCouponDescription()
    {
        return $this->couponDescription;
    }

    /**
     * @param mixed $couponDescription
     */
    public function setCouponDescription($couponDescription)
    {
        $this->couponDescription = $couponDescription;
    }

    /**
     * @return mixed
     */
    public function getCouponExpireTime()
    {
        return $this->couponExpireTime;
    }

    /**
     * @param mixed $couponExpireTime
     */
    public function setCouponExpireTime($couponExpireTime)
    {
        $this->couponExpireTime = $couponExpireTime;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodDetailMetadatal()
    {
        return $this->paymentMethodDetailMetadatal;
    }

    /**
     * @param mixed $paymentMethodDetailMetadatal
     */
    public function setPaymentMethodDetailMetadatal($paymentMethodDetailMetadatal)
    {
        $this->paymentMethodDetailMetadatal = $paymentMethodDetailMetadatal;
    }
}
