<?php
namespace Mantoufan\model;

class PaymentMethodInfo
{
    public $paymentMethodType;
    public $paymentMethodDetail;
    public $enabled;
    public $preferred;
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
    public function getPaymentMethodDetail()
    {
        return $this->paymentMethodDetail;
    }

    /**
     * @param mixed $paymentMethodDetail
     */
    public function setPaymentMethodDetail($paymentMethodDetail)
    {
        $this->paymentMethodDetail = $paymentMethodDetail;
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
