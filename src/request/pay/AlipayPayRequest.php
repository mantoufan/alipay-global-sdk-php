<?php
namespace Mantoufan\request\pay;

use Mantoufan\request\AlipayRequest;

class AlipayPayRequest extends AlipayRequest
{
    public $productCode;
    public $paymentRequestId;
    public $order;
    public $paymentAmount;
    public $payToMethod;
    public $paymentMethod;
    public $paymentExpiryTime;
    public $paymentRedirectUrl;
    public $paymentNotifyUrl;
    public $isAuthorization;
    public $paymentVerificationData;
    public $paymentFactor;
    public $merchant;
    public $extendInfo;
    public $creditPayPlan;
    public $settlementStrategy;
    public $accessToken;

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param mixed $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestId()
    {
        return $this->paymentRequestId;
    }

    /**
     * @param mixed $paymentRequestId
     */
    public function setPaymentRequestId($paymentRequestId)
    {
        $this->paymentRequestId = $paymentRequestId;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * @param mixed $paymentAmount
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;
    }

    /**
     * @return mixed
     */
    public function getPayToMethod()
    {
        return $this->payToMethod;
    }

    /**
     * @param mixed $payToMethod
     */
    public function setPayToMethod($payToMethod)
    {
        $this->payToMethod = $payToMethod;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param mixed $paymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return mixed
     */
    public function getPaymentExpiryTime()
    {
        return $this->paymentExpiryTime;
    }

    /**
     * @param mixed $paymentExpiryTime
     */
    public function setPaymentExpiryTime($paymentExpiryTime)
    {
        $this->paymentExpiryTime = $paymentExpiryTime;
    }

    /**
     * @return mixed
     */
    public function getPaymentRedirectUrl()
    {
        return $this->paymentRedirectUrl;
    }

    /**
     * @param mixed $paymentRedirectUrl
     */
    public function setPaymentRedirectUrl($paymentRedirectUrl)
    {
        $this->paymentRedirectUrl = $paymentRedirectUrl;
    }

    /**
     * @return mixed
     */
    public function getPaymentNotifyUrl()
    {
        return $this->paymentNotifyUrl;
    }

    /**
     * @param mixed $paymentNotifyUrl
     */
    public function setPaymentNotifyUrl($paymentNotifyUrl)
    {
        $this->paymentNotifyUrl = $paymentNotifyUrl;
    }

    /**
     * @return mixed
     */
    public function getIsAuthorization()
    {
        return $this->isAuthorization;
    }

    /**
     * @param mixed $isAuthorization
     */
    public function setIsAuthorization($isAuthorization)
    {
        $this->isAuthorization = $isAuthorization;
    }

    /**
     * @return mixed
     */
    public function getPaymentVerificationData()
    {
        return $this->paymentVerificationData;
    }

    /**
     * @param mixed $paymentVerificationData
     */
    public function setPaymentVerificationData($paymentVerificationData)
    {
        $this->paymentVerificationData = $paymentVerificationData;
    }

    /**
     * @return mixed
     */
    public function getPaymentFactor()
    {
        return $this->paymentFactor;
    }

    /**
     * @param mixed $paymentFactor
     */
    public function setPaymentFactor($paymentFactor)
    {
        $this->paymentFactor = $paymentFactor;
    }

    /**
     * @return mixed
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param mixed $merchant
     */
    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;
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

    /**
     * @return mixed
     */
    public function getCreditPayPlan()
    {
        return $this->creditPayPlan;
    }

    /**
     * @param mixed $creditPayPlan
     */
    public function setCreditPayPlan($creditPayPlan)
    {
        $this->creditPayPlan = $creditPayPlan;
    }

    /**
     * @return mixed
     */
    public function getSettlementStrategy()
    {
        return $this->settlementStrategy;
    }

    /**
     * @param mixed $settlementStrategy
     */
    public function setSettlementStrategy($settlementStrategy)
    {
        $this->settlementStrategy = $settlementStrategy;
    }
}
