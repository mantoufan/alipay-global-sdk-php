<?php
namespace Mantoufan\model;

class PspCustomerInfo
{
    public $pspName;
    public $pspCustomerId;
    public $displayCustomerId;

    /**
     * @return mixed
     */
    public function getPspName()
    {
        return $this->pspName;
    }

    /**
     * @param mixed $pspName
     */
    public function setPspName($pspName)
    {
        $this->pspName = $pspName;
    }

    /**
     * @return mixed
     */
    public function getPspCustomerId()
    {
        return $this->pspCustomerId;
    }

    /**
     * @param mixed $pspCustomerId
     */
    public function setPspCustomerId($pspCustomerId)
    {
        $this->pspCustomerId = $pspCustomerId;
    }

    /**
     * @return mixed
     */
    public function getDisplayCustomerId()
    {
        return $this->displayCustomerId;
    }

    /**
     * @param mixed $displayCustomerId
     */
    public function setDisplayCustomerId($displayCustomerId)
    {
        $this->displayCustomerId = $displayCustomerId;
    }
}
