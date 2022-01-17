<?php
namespace Mantoufan\model;

class PaymentMethodDetail
{
    public $paymentMethodDetailType;
    public $card;
    public $externalAccount;
    public $discount;
    public $coupon;
    public $extendInfo;

    /**
     * @return mixed
     */
    public function getPaymentMethodDetailType()
    {
        return $this->paymentMethodDetailType;
    }

    /**
     * @param mixed $paymentMethodDetailType
     */
    public function setPaymentMethodDetailType($paymentMethodDetailType)
    {
        $this->paymentMethodDetailType = $paymentMethodDetailType;
    }

    /**
     * @return mixed
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param mixed $card
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * @return mixed
     */
    public function getExternalAccount()
    {
        return $this->externalAccount;
    }

    /**
     * @param mixed $externalAccount
     */
    public function setExternalAccount($externalAccount)
    {
        $this->externalAccount = $externalAccount;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param mixed $coupon
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;
    }

    /**
     * @return mixed
     */
    public function getExtendInfo()
    {
        return $this->extendInfo;
    }

    /**
     * @param mixed $extendInfo
     */
    public function setExtendInfo($extendInfo)
    {
        $this->extendInfo = $extendInfo;
    }
}
