<?php
namespace Mantoufan\model;

class UserName
{
    public $firstName;
    public $middleName;
    public $lastName;
    public $fullName;

    /**
     * @return String
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param String $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return String
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param String $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * @return String
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param String $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return String
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param String $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
}
