<?php
namespace Mantoufan\request\users;

use Mantoufan\request\AlipayRequest;

class AlipayVerifyAuthenticationRequest extends AlipayRequest
{
    public $authenticationType;
    public $authenticationRequestId;
    public $authenticationValue;

    /**
     * @return mixed
     */
    public function getAuthenticationType()
    {
        return $this->authenticationType;
    }

    /**
     * @param mixed $authenticationType
     */
    public function setAuthenticationType($authenticationType)
    {
        $this->authenticationType = $authenticationType;
    }

    /**
     * @return mixed
     */
    public function getAuthenticationRequestId()
    {
        return $this->authenticationRequestId;
    }

    /**
     * @param mixed $authenticationRequestId
     */
    public function setAuthenticationRequestId($authenticationRequestId)
    {
        $this->authenticationRequestId = $authenticationRequestId;
    }

    /**
     * @return mixed
     */
    public function getAuthenticationValue()
    {
        return $this->authenticationValue;
    }

    /**
     * @param mixed $authenticationValue
     */
    public function setAuthenticationValue($authenticationValue)
    {
        $this->authenticationValue = $authenticationValue;
    }
}
