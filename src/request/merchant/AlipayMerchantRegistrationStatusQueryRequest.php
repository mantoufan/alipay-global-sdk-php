<?php
namespace Mantoufan\request\merchant;

use Mantoufan\request\AlipayRequest;

class AlipayMerchantRegistrationStatusQueryRequest extends AlipayRequest
{
    public $registrationRequestId;
    public $referenceMerchantId;

    /**
     * @return mixed
     */
    public function getRegistrationRequestId()
    {
        return $this->registrationRequestId;
    }

    /**
     * @param mixed $registrationRequestId
     */
    public function setRegistrationRequestId($registrationRequestId)
    {
        $this->registrationRequestId = $registrationRequestId;
    }

    /**
     * @return mixed
     */
    public function getReferenceMerchantId()
    {
        return $this->referenceMerchantId;
    }

    /**
     * @param mixed $referenceMerchantId
     */
    public function setReferenceMerchantId($referenceMerchantId)
    {
        $this->referenceMerchantId = $referenceMerchantId;
    }
}
