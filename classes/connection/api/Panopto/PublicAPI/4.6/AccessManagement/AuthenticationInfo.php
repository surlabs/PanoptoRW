<?php

namespace Panopto\AccessManagement;

class AuthenticationInfo extends \Panopto\SessionManagement\AuthenticationInfo
{

    /**
     * @var string $AuthCode
     */
    protected $AuthCode = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $UserKey
     */
    protected $UserKey = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
      return $this->AuthCode;
    }

    /**
     * @param string $AuthCode
     * @return \Panopto\AccessManagement\AuthenticationInfo
     */
    public function setAuthCode($AuthCode)
    {
      $this->AuthCode = $AuthCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Panopto\AccessManagement\AuthenticationInfo
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserKey()
    {
      return $this->UserKey;
    }

    /**
     * @param string $UserKey
     * @return \Panopto\AccessManagement\AuthenticationInfo
     */
    public function setUserKey($UserKey)
    {
      $this->UserKey = $UserKey;
      return $this;
    }

}
