<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/sms.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *发送短信通用方法
 *
 * Generated from protobuf message <code>proto.SendSmsParam</code>
 */
class SendSmsParam extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号码
     *
     * Generated from protobuf field <code>string phone = 1;</code>
     */
    protected $phone = '';
    /**
     *模版代码
     *
     * Generated from protobuf field <code>string templateCode = 2;</code>
     */
    protected $templateCode = '';
    /**
     *模版内容（转成json字符串）
     *
     * Generated from protobuf field <code>string templateParam = 3;</code>
     */
    protected $templateParam = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone
     *          手机号码
     *     @type string $templateCode
     *          模版代码
     *     @type string $templateParam
     *          模版内容（转成json字符串）
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Sms::initOnce();
        parent::__construct($data);
    }

    /**
     *手机号码
     *
     * Generated from protobuf field <code>string phone = 1;</code>
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     *手机号码
     *
     * Generated from protobuf field <code>string phone = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone = $var;

        return $this;
    }

    /**
     *模版代码
     *
     * Generated from protobuf field <code>string templateCode = 2;</code>
     * @return string
     */
    public function getTemplateCode()
    {
        return $this->templateCode;
    }

    /**
     *模版代码
     *
     * Generated from protobuf field <code>string templateCode = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->templateCode = $var;

        return $this;
    }

    /**
     *模版内容（转成json字符串）
     *
     * Generated from protobuf field <code>string templateParam = 3;</code>
     * @return string
     */
    public function getTemplateParam()
    {
        return $this->templateParam;
    }

    /**
     *模版内容（转成json字符串）
     *
     * Generated from protobuf field <code>string templateParam = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateParam($var)
    {
        GPBUtil::checkString($var, True);
        $this->templateParam = $var;

        return $this;
    }

}

