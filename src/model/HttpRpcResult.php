<?php
namespace Mantoufan\model;

class HttpRpcResult
{
    public $rspBody;
    public $rspSign;
    public $rspTime;

    /**
     * @return mixed
     */
    public function getRspBody()
    {
        return $this->rspBody;
    }

    /**
     * @param mixed $rspBody
     */
    public function setRspBody($rspBody)
    {
        $this->rspBody = $rspBody;
    }

    /**
     * @return mixed
     */
    public function getRspSign()
    {
        return $this->rspSign;
    }

    /**
     * @param mixed $rspSign
     */
    public function setRspSign($rspSign)
    {
        $this->rspSign = $rspSign;
    }

    /**
     * @return mixed
     */
    public function getRspTime()
    {
        return $this->rspTime;
    }

    /**
     * @param mixed $repTime
     */
    public function setRspTime($rspTime)
    {
        $this->rspTime = $rspTime;
    }
}
