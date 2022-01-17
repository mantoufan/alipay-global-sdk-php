<?php
namespace Mantoufan\model;

class PaymentOption
{
    public $paymentMethodType;
    public $paymentMethodCategory;
    public $enabled;
    public $preferred;
    public $disableReason;
    public $amountLimitInfoMap;
    public $supportedCurrencies;
    public $paymentOptionDetail;
    public $extendInfo;

    /**
     * @return mixed
     */
    public function getPaymentMethodType()
    {
        return $this->paymentMethodType;
    }

    /**
     * @param mixed $paymentMethodType
     */
    public function setPaymentMethodType($paymentMethodType)
    {
        $this->paymentMethodType = $paymentMethodType;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodCategory()
    {
        return $this->paymentMethodCategory;
    }

    /**
     * @param mixed $paymentMethodCategory
     */
    public function setPaymentMethodCategory($paymentMethodCategory)
    {
        $this->paymentMethodCategory = $paymentMethodCategory;
    }

    /**
     * @return mixed
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param mixed $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return mixed
     */
    public function getPreferred()
    {
        return $this->preferred;
    }

    /**
     * @param mixed $preferred
     */
    public function setPreferred($preferred)
    {
        $this->preferred = $preferred;
    }

    /**
     * @return mixed
     */
    public function getDisableReason()
    {
        return $this->disableReason;
    }

    /**
     * @param mixed $disableReason
     */
    public function setDisableReason($disableReason)
    {
        $this->disableReason = $disableReason;
    }

    /**
     * @return mixed
     */
    public function getAmountLimitInfoMap()
    {
        return $this->amountLimitInfoMap;
    }

    /**
     * @param mixed $amountLimitInfoMap
     */
    public function setAmountLimitInfoMap($amountLimitInfoMap)
    {
        $this->amountLimitInfoMap = $amountLimitInfoMap;
    }

    /**
     * @return mixed
     */
    public function getSupportedCurrencies()
    {
        return $this->supportedCurrencies;
    }

    /**
     * @param mixed $supportedCurrencies
     */
    public function setSupportedCurrencies($supportedCurrencies)
    {
        $this->supportedCurrencies = $supportedCurrencies;
    }

    /**
     * @return mixed
     */
    public function getPaymentOptionDetail()
    {
        return $this->paymentOptionDetail;
    }

    /**
     * @param mixed $paymentOptionDetail
     */
    public function setPaymentOptionDetail($paymentOptionDetail)
    {
        $this->paymentOptionDetail = $paymentOptionDetail;
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
