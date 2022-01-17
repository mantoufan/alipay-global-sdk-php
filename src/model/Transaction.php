<?php
namespace Mantoufan\model;

class Transaction
{
    public $transactionResult;
    public $transactionId;
    public $transactionType;
    public $transactionStatus;
    public $transactionAmount;
    public $transactionRequestId;
    public $transactionTime;

    /**
     * @return mixed
     */
    public function getTransactionResult()
    {
        return $this->transactionResult;
    }

    /**
     * @param mixed $transactionResult
     */
    public function setTransactionResult($transactionResult)
    {
        $this->transactionResult = $transactionResult;
    }

    /**
     * @return mixed
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param mixed $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return mixed
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * @param mixed $transactionType
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
    }

    /**
     * @return mixed
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }

    /**
     * @param mixed $transactionStatus
     */
    public function setTransactionStatus($transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;
    }

    /**
     * @return mixed
     */
    public function getTransactionAmount()
    {
        return $this->transactionAmount;
    }

    /**
     * @param mixed $transactionAmount
     */
    public function setTransactionAmount($transactionAmount)
    {
        $this->transactionAmount = $transactionAmount;
    }

    /**
     * @return mixed
     */
    public function getTransactionRequestId()
    {
        return $this->transactionRequestId;
    }

    /**
     * @param mixed $transactionRequestId
     */
    public function setTransactionRequestId($transactionRequestId)
    {
        $this->transactionRequestId = $transactionRequestId;
    }

    /**
     * @return mixed
     */
    public function getTransactionTime()
    {
        return $this->transactionTime;
    }

    /**
     * @param mixed $transactionTime
     */
    public function setTransactionTime($transactionTime)
    {
        $this->transactionTime = $transactionTime;
    }
}
