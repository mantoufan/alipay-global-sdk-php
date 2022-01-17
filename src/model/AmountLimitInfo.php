<?php
namespace Mantoufan\model;

class AmountLimitInfo
{
    public $singleLimit;
    public $dayLimit;
    public $monthLimit;

    /**
     * @return mixed
     */
    public function getSingleLimit()
    {
        return $this->singleLimit;
    }

    /**
     * @param mixed $singleLimit
     */
    public function setSingleLimit($singleLimit)
    {
        $this->singleLimit = $singleLimit;
    }

    /**
     * @return mixed
     */
    public function getDayLimit()
    {
        return $this->dayLimit;
    }

    /**
     * @param mixed $dayLimit
     */
    public function setDayLimit($dayLimit)
    {
        $this->dayLimit = $dayLimit;
    }

    /**
     * @return mixed
     */
    public function getMonthLimit()
    {
        return $this->monthLimit;
    }

    /**
     * @param mixed $monthLimit
     */
    public function setMonthLimit($monthLimit)
    {
        $this->monthLimit = $monthLimit;
    }
}
