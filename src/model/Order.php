<?php
namespace Mantoufan\model;

class Order
{
    public $referenceOrderId;
    public $orderDescription;
    public $orderAmount;
    public $merchant;
    public $goods;
    public $shipping;
    public $buyer;
    public $env;
    public $extendInfo;

    /**
     * @return String
     */
    public function getReferenceOrderId()
    {
        return $this->referenceOrderId;
    }

    /**
     * @param String $referenceOrderId
     */
    public function setReferenceOrderId($referenceOrderId)
    {
        $this->referenceOrderId = $referenceOrderId;
    }

    /**
     * @return String
     */
    public function getOrderDescription()
    {
        return $this->orderDescription;
    }

    /**
     * @param String $orderDescription
     */
    public function setOrderDescription($orderDescription)
    {
        $this->orderDescription = $orderDescription;
    }

    /**
     * @return Amount
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * @param Amount $orderAmount
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
    }

    /**
     * @return Merchant
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    /**
     * @param Merchant $merchant
     */
    public function setMerchant($merchant)
    {
        $this->merchant = $merchant;
    }

    /**
     * @return Goods
     */
    public function getGoods()
    {
        return $this->goods;
    }

    /**
     * @param Goods $goods
     */
    public function setGoods($goods)
    {
        $this->goods = $goods;
    }

    /**
     * @return Shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param Shipping $shipping
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * @return Buyer
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @param Buyer $buyer
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
    }

    /**
     * @return Env
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * @param Env $env
     */
    public function setEnv($env)
    {
        $this->env = $env;
    }

    /**
     * @return mixed
     */
    public function getExtendInfo()
    {
        return $this->extendInfo;
    }

    /**
     * @param mixed $extendInfo
     */
    public function setExtendInfo($extendInfo)
    {
        $this->extendInfo = $extendInfo;
    }
}
