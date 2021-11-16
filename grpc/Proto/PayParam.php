<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/pay.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *PayParam 支付入参
 *
 * Generated from protobuf message <code>proto.PayParam</code>
 */
class PayParam extends \Google\Protobuf\Internal\Message
{
    /**
     *支付方式
     *
     * Generated from protobuf field <code>.proto.PayMethod payMethod = 1;</code>
     */
    protected $payMethod = 0;
    /**
     *微信小程序、公众号、支付宝的APPID
     *
     * Generated from protobuf field <code>string appId = 2;</code>
     */
    protected $appId = '';
    /**
     *订单号
     *
     * Generated from protobuf field <code>string oid = 3;</code>
     */
    protected $oid = '';
    /**
     *标题
     *
     * Generated from protobuf field <code>string title = 4;</code>
     */
    protected $title = '';
    /**
     *订单金额（单位分）
     *
     * Generated from protobuf field <code>int64 amount = 5;</code>
     */
    protected $amount = 0;
    /**
     *异步回调地址
     *
     * Generated from protobuf field <code>string callbackUrl = 6;</code>
     */
    protected $callbackUrl = '';
    /**
     *订单失效时间，格式为yyyyMMddHHmmss
     *
     * Generated from protobuf field <code>optional string timeExpire = 10;</code>
     */
    protected $timeExpire = null;
    /**
     *余额支付时支付密码
     *
     * Generated from protobuf field <code>optional string payPasswd = 11;</code>
     */
    protected $payPasswd = null;
    /**
     *支付宝wap或网页支付时，用于跳回原站点
     *
     * Generated from protobuf field <code>optional string returnUrl = 12;</code>
     */
    protected $returnUrl = null;
    /**
     *透传参数
     *
     * Generated from protobuf field <code>optional string extinfo = 13;</code>
     */
    protected $extinfo = null;
    protected $userInfo;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $payMethod
     *          支付方式
     *     @type string $appId
     *          微信小程序、公众号、支付宝的APPID
     *     @type string $oid
     *          订单号
     *     @type string $title
     *          标题
     *     @type int|string $amount
     *          订单金额（单位分）
     *     @type string $callbackUrl
     *          异步回调地址
     *     @type string $openid
     *          微信的openid(只有微信支付时使用)
     *     @type string $wxcode
     *          微信支付时使用code换openid
     *     @type int|string $memberid
     *          余额支付时用户ID
     *     @type string $timeExpire
     *          订单失效时间，格式为yyyyMMddHHmmss
     *     @type string $payPasswd
     *          余额支付时支付密码
     *     @type string $returnUrl
     *          支付宝wap或网页支付时，用于跳回原站点
     *     @type string $extinfo
     *          透传参数
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Pay::initOnce();
        parent::__construct($data);
    }

    /**
     *支付方式
     *
     * Generated from protobuf field <code>.proto.PayMethod payMethod = 1;</code>
     * @return int
     */
    public function getPayMethod()
    {
        return $this->payMethod;
    }

    /**
     *支付方式
     *
     * Generated from protobuf field <code>.proto.PayMethod payMethod = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPayMethod($var)
    {
        GPBUtil::checkEnum($var, \Proto\PayMethod::class);
        $this->payMethod = $var;

        return $this;
    }

    /**
     *微信小程序、公众号、支付宝的APPID
     *
     * Generated from protobuf field <code>string appId = 2;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     *微信小程序、公众号、支付宝的APPID
     *
     * Generated from protobuf field <code>string appId = 2;</code>
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
     *订单号
     *
     * Generated from protobuf field <code>string oid = 3;</code>
     * @return string
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     *订单号
     *
     * Generated from protobuf field <code>string oid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOid($var)
    {
        GPBUtil::checkString($var, True);
        $this->oid = $var;

        return $this;
    }

    /**
     *标题
     *
     * Generated from protobuf field <code>string title = 4;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     *标题
     *
     * Generated from protobuf field <code>string title = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     *订单金额（单位分）
     *
     * Generated from protobuf field <code>int64 amount = 5;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     *订单金额（单位分）
     *
     * Generated from protobuf field <code>int64 amount = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     *异步回调地址
     *
     * Generated from protobuf field <code>string callbackUrl = 6;</code>
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     *异步回调地址
     *
     * Generated from protobuf field <code>string callbackUrl = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->callbackUrl = $var;

        return $this;
    }

    /**
     *微信的openid(只有微信支付时使用)
     *
     * Generated from protobuf field <code>string openid = 7;</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->readOneof(7);
    }

    public function hasOpenid()
    {
        return $this->hasOneof(7);
    }

    /**
     *微信的openid(只有微信支付时使用)
     *
     * Generated from protobuf field <code>string openid = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setOpenid($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     *微信支付时使用code换openid
     *
     * Generated from protobuf field <code>string wxcode = 8;</code>
     * @return string
     */
    public function getWxcode()
    {
        return $this->readOneof(8);
    }

    public function hasWxcode()
    {
        return $this->hasOneof(8);
    }

    /**
     *微信支付时使用code换openid
     *
     * Generated from protobuf field <code>string wxcode = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setWxcode($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     *余额支付时用户ID
     *
     * Generated from protobuf field <code>int64 memberid = 9;</code>
     * @return int|string
     */
    public function getMemberid()
    {
        return $this->readOneof(9);
    }

    public function hasMemberid()
    {
        return $this->hasOneof(9);
    }

    /**
     *余额支付时用户ID
     *
     * Generated from protobuf field <code>int64 memberid = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemberid($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     *订单失效时间，格式为yyyyMMddHHmmss
     *
     * Generated from protobuf field <code>optional string timeExpire = 10;</code>
     * @return string
     */
    public function getTimeExpire()
    {
        return isset($this->timeExpire) ? $this->timeExpire : '';
    }

    public function hasTimeExpire()
    {
        return isset($this->timeExpire);
    }

    public function clearTimeExpire()
    {
        unset($this->timeExpire);
    }

    /**
     *订单失效时间，格式为yyyyMMddHHmmss
     *
     * Generated from protobuf field <code>optional string timeExpire = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTimeExpire($var)
    {
        GPBUtil::checkString($var, True);
        $this->timeExpire = $var;

        return $this;
    }

    /**
     *余额支付时支付密码
     *
     * Generated from protobuf field <code>optional string payPasswd = 11;</code>
     * @return string
     */
    public function getPayPasswd()
    {
        return isset($this->payPasswd) ? $this->payPasswd : '';
    }

    public function hasPayPasswd()
    {
        return isset($this->payPasswd);
    }

    public function clearPayPasswd()
    {
        unset($this->payPasswd);
    }

    /**
     *余额支付时支付密码
     *
     * Generated from protobuf field <code>optional string payPasswd = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setPayPasswd($var)
    {
        GPBUtil::checkString($var, True);
        $this->payPasswd = $var;

        return $this;
    }

    /**
     *支付宝wap或网页支付时，用于跳回原站点
     *
     * Generated from protobuf field <code>optional string returnUrl = 12;</code>
     * @return string
     */
    public function getReturnUrl()
    {
        return isset($this->returnUrl) ? $this->returnUrl : '';
    }

    public function hasReturnUrl()
    {
        return isset($this->returnUrl);
    }

    public function clearReturnUrl()
    {
        unset($this->returnUrl);
    }

    /**
     *支付宝wap或网页支付时，用于跳回原站点
     *
     * Generated from protobuf field <code>optional string returnUrl = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setReturnUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->returnUrl = $var;

        return $this;
    }

    /**
     *透传参数
     *
     * Generated from protobuf field <code>optional string extinfo = 13;</code>
     * @return string
     */
    public function getExtinfo()
    {
        return isset($this->extinfo) ? $this->extinfo : '';
    }

    public function hasExtinfo()
    {
        return isset($this->extinfo);
    }

    public function clearExtinfo()
    {
        unset($this->extinfo);
    }

    /**
     *透传参数
     *
     * Generated from protobuf field <code>optional string extinfo = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setExtinfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->extinfo = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserInfo()
    {
        return $this->whichOneof("userInfo");
    }

}

