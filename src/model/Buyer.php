<?php
namespace Mantoufan\model;

class Buyer
{
    public $referenceBuyerId;
    public $buyerName;
    public $buyerPhoneNo;
    public $buyerEmail;

    /**
     * @return String
     */
    public function getReferenceBuyerId()
    {
        return $this->referenceBuyerId;
    }

    /**
     * @param String $referenceBuyerId
     */
    public function setReferenceBuyerId($referenceBuyerId)
    {
        $this->referenceBuyerId = $referenceBuyerId;
    }

    /**
     * @return UserName
     */
    public function getBuyerName()
    {
        return $this->buyerName;
    }

    /**
     * @param UserName $buyerName
     */
    public function setBuyerName($buyerName)
    {
        $this->buyerName = $buyerName;
    }

    /**
     * @return String
     */
    public function getBuyerPhoneNo()
    {
        return $this->buyerPhoneNo;
    }

    /**
     * @param String $buyerPhoneNo
     */
    public function setBuyerPhoneNo($buyerPhoneNo)
    {
        $this->buyerPhoneNo = $buyerPhoneNo;
    }

    /**
     * @return String
     */
    public function getBuyerEmail()
    {
        return $this->buyerEmail;
    }

    /**
     * @param String $buyerEmail
     */
    public function setBuyerEmail($buyerEmail)
    {
        $this->buyerEmail = $buyerEmail;
    }
}
