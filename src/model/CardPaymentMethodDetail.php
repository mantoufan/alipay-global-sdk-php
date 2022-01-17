<?php
namespace Mantoufan\model;

class CardPaymentMethodDetail
{
    public $cardToken;
    public $cardNo;
    public $brand;
    public $cardIssuer;
    public $countryIssue;
    public $instUserName;
    public $expiryYear;
    public $expiryMonth;
    public $billingAddress;
    public $mask;
    public $last4;
    public $paymentMethodDetailMetadata;

    /**
     * @return mixed
     */
    public function getCardToken()
    {
        return $this->cardToken;
    }

    /**
     * @param mixed $cardToken
     */
    public function setCardToken($cardToken)
    {
        $this->cardToken = $cardToken;
    }

    /**
     * @return mixed
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * @param mixed $cardNo
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getCardIssuer()
    {
        return $this->cardIssuer;
    }

    /**
     * @param mixed $cardIssuer
     */
    public function setCardIssuer($cardIssuer)
    {
        $this->cardIssuer = $cardIssuer;
    }

    /**
     * @return mixed
     */
    public function getCountryIssue()
    {
        return $this->countryIssue;
    }

    /**
     * @param mixed $countryIssue
     */
    public function setCountryIssue($countryIssue)
    {
        $this->countryIssue = $countryIssue;
    }

    /**
     * @return mixed
     */
    public function getInstUserName()
    {
        return $this->instUserName;
    }

    /**
     * @param mixed $instUserName
     */
    public function setInstUserName($instUserName)
    {
        $this->instUserName = $instUserName;
    }

    /**
     * @return mixed
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * @param mixed $expiryYear
     */
    public function setExpiryYear($expiryYear)
    {
        $this->expiryYear = $expiryYear;
    }

    /**
     * @return mixed
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * @param mixed $expiryMonth
     */
    public function setExpiryMonth($expiryMonth)
    {
        $this->expiryMonth = $expiryMonth;
    }

    /**
     * @return mixed
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param mixed $billingAddress
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return mixed
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * @param mixed $mask
     */
    public function setMask($mask)
    {
        $this->mask = $mask;
    }

    /**
     * @return mixed
     */
    public function getLast4()
    {
        return $this->last4;
    }

    /**
     * @param mixed $last4
     */
    public function setLast4($last4)
    {
        $this->last4 = $last4;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodDetailMetadata()
    {
        return $this->paymentMethodDetailMetadata;
    }

    /**
     * @param mixed $paymentMethodDetailMetadata
     */
    public function setPaymentMethodDetailMetadata($paymentMethodDetailMetadata)
    {
        $this->paymentMethodDetailMetadata = $paymentMethodDetailMetadata;
    }
}
