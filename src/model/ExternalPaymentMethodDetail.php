<?php
namespace Mantoufan\model;

class ExternalPaymentMethodDetail
{
    public $assetToken;
    public $accountDisplayName;
    public $disableReason;
    public $paymentMethodDetailMetadata;

    /**
     * @return mixed
     */
    public function getAssetToken()
    {
        return $this->assetToken;
    }

    /**
     * @param mixed $assetToken
     */
    public function setAssetToken($assetToken)
    {
        $this->assetToken = $assetToken;
    }

    /**
     * @return mixed
     */
    public function getAccountDisplayName()
    {
        return $this->accountDisplayName;
    }

    /**
     * @param mixed $accountDisplayName
     */
    public function setAccountDisplayName($accountDisplayName)
    {
        $this->accountDisplayName = $accountDisplayName;
    }

    /**
     * @return mixed
     */
    public function getDisableReason()
    {
        return $this->disableReason;
    }

    /**
     * @param mixed $disableReason
     */
    public function setDisableReason($disableReason)
    {
        $this->disableReason = $disableReason;
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
