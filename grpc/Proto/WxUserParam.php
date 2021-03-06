<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/wechat.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *通用微信基础数据入参
 *
 * Generated from protobuf message <code>proto.WxUserParam</code>
 */
class WxUserParam extends \Google\Protobuf\Internal\Message
{
    /**
     *小程序的APPID
     *
     * Generated from protobuf field <code>optional string appId = 1;</code>
     */
    protected $appId = null;
    /**
     *微信用户授权code
     *
     * Generated from protobuf field <code>optional string code = 2;</code>
     */
    protected $code = null;
    /**
     *微信用户openid
     *
     * Generated from protobuf field <code>optional string openId = 3;</code>
     */
    protected $openId = null;
    /**
     * Generated from protobuf field <code>optional string sessionKey = 4;</code>
     */
    protected $sessionKey = null;
    /**
     * Generated from protobuf field <code>optional string encryptedData = 5;</code>
     */
    protected $encryptedData = null;
    /**
     * Generated from protobuf field <code>optional string iv = 6;</code>
     */
    protected $iv = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $appId
     *          小程序的APPID
     *     @type string $code
     *          微信用户授权code
     *     @type string $openId
     *          微信用户openid
     *     @type string $sessionKey
     *     @type string $encryptedData
     *     @type string $iv
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Wechat::initOnce();
        parent::__construct($data);
    }

    /**
     *小程序的APPID
     *
     * Generated from protobuf field <code>optional string appId = 1;</code>
     * @return string
     */
    public function getAppId()
    {
        return isset($this->appId) ? $this->appId : '';
    }

    public function hasAppId()
    {
        return isset($this->appId);
    }

    public function clearAppId()
    {
        unset($this->appId);
    }

    /**
     *小程序的APPID
     *
     * Generated from protobuf field <code>optional string appId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->appId = $var;

        return $this;
    }

    /**
     *微信用户授权code
     *
     * Generated from protobuf field <code>optional string code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : '';
    }

    public function hasCode()
    {
        return isset($this->code);
    }

    public function clearCode()
    {
        unset($this->code);
    }

    /**
     *微信用户授权code
     *
     * Generated from protobuf field <code>optional string code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     *微信用户openid
     *
     * Generated from protobuf field <code>optional string openId = 3;</code>
     * @return string
     */
    public function getOpenId()
    {
        return isset($this->openId) ? $this->openId : '';
    }

    public function hasOpenId()
    {
        return isset($this->openId);
    }

    public function clearOpenId()
    {
        unset($this->openId);
    }

    /**
     *微信用户openid
     *
     * Generated from protobuf field <code>optional string openId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOpenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->openId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string sessionKey = 4;</code>
     * @return string
     */
    public function getSessionKey()
    {
        return isset($this->sessionKey) ? $this->sessionKey : '';
    }

    public function hasSessionKey()
    {
        return isset($this->sessionKey);
    }

    public function clearSessionKey()
    {
        unset($this->sessionKey);
    }

    /**
     * Generated from protobuf field <code>optional string sessionKey = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->sessionKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string encryptedData = 5;</code>
     * @return string
     */
    public function getEncryptedData()
    {
        return isset($this->encryptedData) ? $this->encryptedData : '';
    }

    public function hasEncryptedData()
    {
        return isset($this->encryptedData);
    }

    public function clearEncryptedData()
    {
        unset($this->encryptedData);
    }

    /**
     * Generated from protobuf field <code>optional string encryptedData = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptedData($var)
    {
        GPBUtil::checkString($var, True);
        $this->encryptedData = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string iv = 6;</code>
     * @return string
     */
    public function getIv()
    {
        return isset($this->iv) ? $this->iv : '';
    }

    public function hasIv()
    {
        return isset($this->iv);
    }

    public function clearIv()
    {
        unset($this->iv);
    }

    /**
     * Generated from protobuf field <code>optional string iv = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setIv($var)
    {
        GPBUtil::checkString($var, True);
        $this->iv = $var;

        return $this;
    }

}

