<?php
namespace Mantoufan\model;

class CodeDetail
{
    public $codeValueType;
    public $codeValue;
    public $displayType;

    /**
     * @return mixed
     */
    public function getCodeValueType()
    {
        return $this->codeValueType;
    }

    /**
     * @param mixed $codeValueType
     */
    public function setCodeValueType($codeValueType)
    {
        $this->codeValueType = $codeValueType;
    }

    /**
     * @return mixed
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * @param mixed $codeValue
     */
    public function setCodeValue($codeValue)
    {
        $this->codeValue = $codeValue;
    }

    /**
     * @return mixed
     */
    public function getDisplayType()
    {
        return $this->displayType;
    }

    /**
     * @param mixed $displayType
     */
    public function setDisplayType($displayType)
    {
        $this->displayType = $displayType;
    }
}
