<?php
namespace Mantoufan\model;

class PaymentVerificationData
{
    public $verifyRequestId;
    public $authenticationCode;

    /**
     * @return mixed
     */
    public function getVerifyRequestId()
    {
        return $this->verifyRequestId;
    }

    /**
     * @param mixed $verifyRequestId
     */
    public function setVerifyRequestId($verifyRequestId)
    {
        $this->verifyRequestId = $verifyRequestId;
    }

    /**
     * @return mixed
     */
    public function getAuthenticationCode()
    {
        return $this->authenticationCode;
    }

    /**
     * @param mixed $authenticationCode
     */
    public function setAuthenticationCode($authenticationCode)
    {
        $this->authenticationCode = $authenticationCode;
    }
}
