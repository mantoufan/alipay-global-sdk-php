<?php
namespace Mantoufan\model;

class Quote
{
    public $quoteId;
    public $quoteCurrencyPair;
    public $quotePrice;
    public $quoteStartTime;
    public $quoteExpiryTime;
    public $guaranteed;

    /**
     * @return mixed
     */
    public function getQuoteId()
    {
        return $this->quoteId;
    }

    /**
     * @param mixed $quoteId
     */
    public function setQuoteId($quoteId)
    {
        $this->quoteId = $quoteId;
    }

    /**
     * @return mixed
     */
    public function getQuoteCurrencyPair()
    {
        return $this->quoteCurrencyPair;
    }

    /**
     * @param mixed $quoteCurrencyPair
     */
    public function setQuoteCurrencyPair($quoteCurrencyPair)
    {
        $this->quoteCurrencyPair = $quoteCurrencyPair;
    }

    /**
     * @return mixed
     */
    public function getQuotePrice()
    {
        return $this->quotePrice;
    }

    /**
     * @param mixed $quotePrice
     */
    public function setQuotePrice($quotePrice)
    {
        $this->quotePrice = $quotePrice;
    }

    /**
     * @return mixed
     */
    public function getQuoteStartTime()
    {
        return $this->quoteStartTime;
    }

    /**
     * @param mixed $quoteStartTime
     */
    public function setQuoteStartTime($quoteStartTime)
    {
        $this->quoteStartTime = $quoteStartTime;
    }

    /**
     * @return mixed
     */
    public function getQuoteExpiryTime()
    {
        return $this->quoteExpiryTime;
    }

    /**
     * @param mixed $quoteExpiryTime
     */
    public function setQuoteExpiryTime($quoteExpiryTime)
    {
        $this->quoteExpiryTime = $quoteExpiryTime;
    }

    /**
     * @return mixed
     */
    public function getGuaranteed()
    {
        return $this->guaranteed;
    }

    /**
     * @param mixed $guaranteed
     */
    public function setGuaranteed($guaranteed)
    {
        $this->guaranteed = $guaranteed;
    }
}
