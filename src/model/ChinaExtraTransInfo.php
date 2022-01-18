<?php
namespace Mantoufan\model;

class ChinaExtraTransInfo
{
    public $businessType;
    public $flightNumber;
    public $departureTime;
    public $hotelName;
    public $checkinTime;
    public $checkoutTime;
    public $admissionNoticeUrl;
    public $totalQuantity;
    public $goodsInfo;
    public $otherBusinessType;

    public function getBusinessType()
    {
        return $this->businessType;
    }

    public function setBusinessType(String $businessType)
    {
        $this->businessType = $businessType;
    }

    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    public function setFlightNumber(String $flightNumber)
    {
        $this->flightNumber = $flightNumber;
    }

    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    public function setDepartureTime(String $departureTime)
    {
        $this->departureTime = $departureTime;
    }

    public function getHotelName()
    {
        return $this->hotelName;
    }

    public function setHotelName(String $hotelName)
    {
        $this->hotelName = $hotelName;
    }

    public function getCheckinTime()
    {
        return $this->checkinTime;
    }

    public function setCheckinTime(String $checkinTime)
    {
        $this->checkinTime = $checkinTime;
    }

    public function getCheckoutTime()
    {
        return $this->checkoutTime;
    }

    public function setCheckoutTime(String $checkoutTime)
    {
        $this->checkoutTime = $checkoutTime;
    }

    public function getAdmissionNoticeUrl()
    {
        return $this->admissionNoticeUrl;
    }

    public function setAdmissionNoticeUrl(String $admissionNoticeUrl)
    {
        $this->admissionNoticeUrl = $admissionNoticeUrl;
    }

    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    public function setTotalQuantity(String $totalQuantity)
    {
        $this->totalQuantity = $totalQuantity;
    }

    public function getGoodsInfo()
    {
        return $this->goodsInfo;
    }

    public function setGoodsInfo(String $goodsInfo)
    {
        $this->goodsInfo = $goodsInfo;
    }

    public function getOtherBusinessType()
    {
        return $this->otherBusinessType;
    }

    public function setOtherBusinessType(String $otherBusinessType)
    {
        $this->otherBusinessType = $otherBusinessType;
    }
}
