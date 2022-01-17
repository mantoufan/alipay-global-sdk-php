<?php
namespace Mantoufan\request\pay;

use Mantoufan\request\AlipayRequest;

class AlipayRefundRequest extends AlipayRequest
{
    public $refundRequestId;
    public $paymentId;
    public $referenceRefundId;
    public $refundAmount;
    public $refundReason;
    public $isAsyncRefund;
    public $extendInfo;

    /**
     * @return mixed
     */
    public function getRefundRequestId()
    {
        return $this->refundRequestId;
    }

    /**
     * @param mixed $refundRequestId
     */
    public function setRefundRequestId($refundRequestId)
    {
        $this->refundRequestId = $refundRequestId;
    }

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param mixed $paymentId
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return mixed
     */
    public function getReferenceRefundId()
    {
        return $this->referenceRefundId;
    }

    /**
     * @param mixed $referenceRefundId
     */
    public function setReferenceRefundId($referenceRefundId)
    {
        $this->referenceRefundId = $referenceRefundId;
    }

    /**
     * @return mixed
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * @param mixed $refundAmount
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * @return mixed
     */
    public function getRefundReason()
    {
        return $this->refundReason;
    }

    /**
     * @param mixed $refundReason
     */
    public function setRefundReason($refundReason)
    {
        $this->refundReason = $refundReason;
    }

    /**
     * @return mixed
     */
    public function getIsAsyncRefund()
    {
        return $this->isAsyncRefund;
    }

    /**
     * @param mixed $isAsyncRefund
     */
    public function setIsAsyncRefund($isAsyncRefund)
    {
        $this->isAsyncRefund = $isAsyncRefund;
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
