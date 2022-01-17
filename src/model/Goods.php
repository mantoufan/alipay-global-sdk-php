<?php
namespace Mantoufan\model;

class Goods
{
    public $referenceGoodsId;
    public $goodsName;
    public $goodsCategory;
    public $goodsBrand;
    public $goodsUnitAmount;
    public $goodsQuantity;
    public $goodsSkuName;

    /**
     * @return String
     */
    public function getReferenceGoodsId()
    {
        return $this->referenceGoodsId;
    }

    /**
     * @param String $referenceGoodsId
     */
    public function setReferenceGoodsId($referenceGoodsId)
    {
        $this->referenceGoodsId = $referenceGoodsId;
    }

    /**
     * @return String
     */
    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * @param String $goodsName
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
    }

    /**
     * @return String
     */
    public function getGoodsCategory()
    {
        return $this->goodsCategory;
    }

    /**
     * @param String $goodsCategory
     */
    public function setGoodsCategory($goodsCategory)
    {
        $this->goodsCategory = $goodsCategory;
    }

    /**
     * @return String
     */
    public function getGoodsBrand()
    {
        return $this->goodsBrand;
    }

    /**
     * @param String $goodsBrand
     */
    public function setGoodsBrand($goodsBrand)
    {
        $this->goodsBrand = $goodsBrand;
    }

    /**
     * @return Amount
     */
    public function getGoodsUnitAmount()
    {
        return $this->goodsUnitAmount;
    }

    /**
     * @param Amount $goodsUnitAmount
     */
    public function setGoodsUnitAmount($goodsUnitAmount)
    {
        $this->goodsUnitAmount = $goodsUnitAmount;
    }

    /**
     * @return String
     */
    public function getGoodsQuantity()
    {
        return $this->goodsQuantity;
    }

    /**
     * @param String $goodsQuantity
     */
    public function setGoodsQuantity($goodsQuantity)
    {
        $this->goodsQuantity = $goodsQuantity;
    }

    /**
     * @return String
     */
    public function getGoodsSkuName()
    {
        return $this->goodsSkuName;
    }

    /**
     * @param String $goodsSkuName
     */
    public function setGoodsSkuName($goodsSkuName)
    {
        $this->goodsSkuName = $goodsSkuName;
    }
}
