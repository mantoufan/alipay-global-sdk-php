<?php
namespace Mantoufan\model;

class RiskScoreDetail
{
    public $riskInfoCode;
    public $riskInfoCodeResult;

    /**
     * @return mixed
     */
    public function getRiskInfoCode()
    {
        return $this->riskInfoCode;
    }

    /**
     * @param mixed $riskInfoCode
     */
    public function setRiskInfoCode($riskInfoCode)
    {
        $this->riskInfoCode = $riskInfoCode;
    }

    /**
     * @return mixed
     */
    public function getRiskInfoCodeResult()
    {
        return $this->riskInfoCodeResult;
    }

    /**
     * @param mixed $riskInfoCodeResult
     */
    public function setRiskInfoCodeResult($riskInfoCodeResult)
    {
        $this->riskInfoCodeResult = $riskInfoCodeResult;
    }
}
