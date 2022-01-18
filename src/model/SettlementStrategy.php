<?php
namespace Mantoufan\model;

class SettlementStrategy
{
    public $settlementCurrency;

    public function getSettlementCurrency()
    {
        return $this->settlementCurrency;
    }

    public function setSettlementCurrency(String $settlementCurrency)
    {
        $this->settlementCurrency = $settlementCurrency;
    }
}
