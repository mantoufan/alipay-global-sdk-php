<?php
namespace Mantoufan\model;

class PaymentFactor
{
    public $isPaymentEvaluation;
    public $inStorePaymentScenario;
    public $presentmentMode;

    /**
     * @return mixed
     */
    public function getIsPaymentEvaluation()
    {
        return $this->isPaymentEvaluation;
    }

    /**
     * @param mixed $isPaymentEvaluation
     */
    public function setIsPaymentEvaluation($isPaymentEvaluation)
    {
        $this->isPaymentEvaluation = $isPaymentEvaluation;
    }

    /**
     * @return mixed
     */
    public function getInStorePaymentScenario()
    {
        return $this->inStorePaymentScenario;
    }

    /**
     * @param mixed $inStorePaymentScenario
     */
    public function setInStorePaymentScenario($inStorePaymentScenario)
    {
        $this->inStorePaymentScenario = $inStorePaymentScenario;
    }

    /**
     * @return mixed
     */
    public function getPresentmentMode()
    {
        return $this->presentmentMode;
    }

    /**
     * @param mixed $presentmentMode
     */
    public function setPresentmentMode($presentmentMode)
    {
        $this->presentmentMode = $presentmentMode;
    }
}
