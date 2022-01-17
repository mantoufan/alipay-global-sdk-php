<?php
namespace Mantoufan\model;

class RegistrationDetail
{
    public $legalName;
    public $attachments;
    public $contactInfo;
    public $registrationType;
    public $registrationNo;
    public $registrationAddress;
    public $businessType;
    public $registrationEffectiveDate;
    public $registrationExpireDate;

    /**
     * @return mixed
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    /**
     * @param mixed $legalName
     */
    public function setLegalName($legalName)
    {
        $this->legalName = $legalName;
    }

    /**
     * @return mixed
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param mixed $attachments
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }

    /**
     * @return mixed
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * @param mixed $contactInfo
     */
    public function setContactInfo($contactInfo)
    {
        $this->contactInfo = $contactInfo;
    }

    /**
     * @return mixed
     */
    public function getRegistrationType()
    {
        return $this->registrationType;
    }

    /**
     * @param mixed $registrationType
     */
    public function setRegistrationType($registrationType)
    {
        $this->registrationType = $registrationType;
    }

    /**
     * @return mixed
     */
    public function getRegistrationNo()
    {
        return $this->registrationNo;
    }

    /**
     * @param mixed $registrationNo
     */
    public function setRegistrationNo($registrationNo)
    {
        $this->registrationNo = $registrationNo;
    }

    /**
     * @return mixed
     */
    public function getRegistrationAddress()
    {
        return $this->registrationAddress;
    }

    /**
     * @param mixed $registrationAddress
     */
    public function setRegistrationAddress($registrationAddress)
    {
        $this->registrationAddress = $registrationAddress;
    }

    /**
     * @return mixed
     */
    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * @param mixed $businessType
     */
    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
    }

    /**
     * @return mixed
     */
    public function getRegistrationEffectiveDate()
    {
        return $this->registrationEffectiveDate;
    }

    /**
     * @param mixed $registrationEffectiveDate
     */
    public function setRegistrationEffectiveDate($registrationEffectiveDate)
    {
        $this->registrationEffectiveDate = $registrationEffectiveDate;
    }

    /**
     * @return mixed
     */
    public function getRegistrationExpireDate()
    {
        return $this->registrationExpireDate;
    }

    /**
     * @param mixed $registrationExpireDate
     */
    public function setRegistrationExpireDate($registrationExpireDate)
    {
        $this->registrationExpireDate = $registrationExpireDate;
    }
}
