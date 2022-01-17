<?php
namespace Mantoufan\request\users;

use Mantoufan\request\AlipayRequest;

class AlipayInitAuthenticationRequest extends AlipayRequest
{
    public $authenticationType;
    public $authenticationRequestId;
    public $authenticationChannelType;
    public $userIdentityType;
    public $userIdentityValue;

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
    public function getAuthenticationChannelType()
    {
        return $this->authenticationChannelType;
    }

    /**
     * @param mixed $authenticationChannelType
     */
    public function setAuthenticationChannelType($authenticationChannelType)
    {
        $this->authenticationChannelType = $authenticationChannelType;
    }

    /**
     * @return mixed
     */
    public function getUserIdentityType()
    {
        return $this->userIdentityType;
    }

    /**
     * @param mixed $userIdentityType
     */
    public function setUserIdentityType($userIdentityType)
    {
        $this->userIdentityType = $userIdentityType;
    }

    /**
     * @return mixed
     */
    public function getUserIdentityValue()
    {
        return $this->userIdentityValue;
    }

    /**
     * @param mixed $userIdentityValue
     */
    public function setUserIdentityValue($userIdentityValue)
    {
        $this->userIdentityValue = $userIdentityValue;
    }
}
