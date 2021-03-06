<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/wechat.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *微信解密用户电话信息
 *
 * Generated from protobuf message <code>proto.WxDecryptPhoneResponse</code>
 */
class WxDecryptPhoneResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * 用户电话号码
     *
     * Generated from protobuf field <code>string phoneNumber = 1;</code>
     */
    protected $phoneNumber = '';
    /**
     * 用户电话号码
     *
     * Generated from protobuf field <code>string purePhoneNumber = 2;</code>
     */
    protected $purePhoneNumber = '';
    /**
     * 用户手机号码归属地国家码
     *
     * Generated from protobuf field <code>string countryCode = 3;</code>
     */
    protected $countryCode = '';
    /**
     * 水印
     *
     * Generated from protobuf field <code>.proto.Watermark watermark = 4;</code>
     */
    protected $watermark = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phoneNumber
     *           用户电话号码
     *     @type string $purePhoneNumber
     *           用户电话号码
     *     @type string $countryCode
     *           用户手机号码归属地国家码
     *     @type \Proto\Watermark $watermark
     *           水印
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Wechat::initOnce();
        parent::__construct($data);
    }

    /**
     * 用户电话号码
     *
     * Generated from protobuf field <code>string phoneNumber = 1;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * 用户电话号码
     *
     * Generated from protobuf field <code>string phoneNumber = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phoneNumber = $var;

        return $this;
    }

    /**
     * 用户电话号码
     *
     * Generated from protobuf field <code>string purePhoneNumber = 2;</code>
     * @return string
     */
    public function getPurePhoneNumber()
    {
        return $this->purePhoneNumber;
    }

    /**
     * 用户电话号码
     *
     * Generated from protobuf field <code>string purePhoneNumber = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPurePhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->purePhoneNumber = $var;

        return $this;
    }

    /**
     * 用户手机号码归属地国家码
     *
     * Generated from protobuf field <code>string countryCode = 3;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * 用户手机号码归属地国家码
     *
     * Generated from protobuf field <code>string countryCode = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->countryCode = $var;

        return $this;
    }

    /**
     * 水印
     *
     * Generated from protobuf field <code>.proto.Watermark watermark = 4;</code>
     * @return \Proto\Watermark|null
     */
    public function getWatermark()
    {
        return $this->watermark;
    }

    public function hasWatermark()
    {
        return isset($this->watermark);
    }

    public function clearWatermark()
    {
        unset($this->watermark);
    }

    /**
     * 水印
     *
     * Generated from protobuf field <code>.proto.Watermark watermark = 4;</code>
     * @param \Proto\Watermark $var
     * @return $this
     */
    public function setWatermark($var)
    {
        GPBUtil::checkMessage($var, \Proto\Watermark::class);
        $this->watermark = $var;

        return $this;
    }

}

