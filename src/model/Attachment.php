<?php
namespace Mantoufan\model;

class Attachment
{
    public $attachmentType;
    public $file;
    public $attachmentName;

    /**
     * @return mixed
     */
    public function getAttachmentType()
    {
        return $this->attachmentType;
    }

    /**
     * @param mixed $attachmentType
     */
    public function setAttachmentType($attachmentType)
    {
        $this->attachmentType = $attachmentType;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return mixed
     */
    public function getAttachmentName()
    {
        return $this->attachmentName;
    }

    /**
     * @param mixed $attachmentName
     */
    public function setAttachmentName($attachmentName)
    {
        $this->attachmentName = $attachmentName;
    }
}
