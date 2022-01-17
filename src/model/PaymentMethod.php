<?php
namespace Mantoufan\model;

class PaymentMethod
{
    public $paymentMethodType;
    public $paymentMethodId;
    public $paymentMethodMetaData;
    public $customerId;
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
    public function getPaymentMethodId()
    {
        return $this->paymentMethodId;
    }

    /**
     * @param mixed $paymentMethodId
     */
    public function setPaymentMethodId($paymentMethodId)
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodMetaData()
    {
        return $this->paymentMethodMetaData;
    }

    /**
     * @param mixed $paymentMethodMetaData
     */
    public function setPaymentMethodMetaData($paymentMethodMetaData)
    {
        $this->paymentMethodMetaData = $paymentMethodMetaData;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param mixed $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
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
