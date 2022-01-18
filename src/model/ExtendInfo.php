<?php
namespace Mantoufan\model;

class ExtendInfo
{
    public $chinaExtraTransInfo;

    public function setChinaExtraTransInfo(ChinaExtraTransInfo $chinaExtraTransInfo)
    {
        $this->chinaExtraTransInfo = $chinaExtraTransInfo;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
