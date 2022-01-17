<?php
namespace Mantoufan\model;

class Amount
{
    public $currency;
    public $value;

    /**
     * @return String
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param String $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return String
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param String $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
