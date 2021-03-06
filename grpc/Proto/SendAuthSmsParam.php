<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/sms.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *认证短信发送
 *
 * Generated from protobuf message <code>proto.SendAuthSmsParam</code>
 */
class SendAuthSmsParam extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号码
     *
     * Generated from protobuf field <code>string phone = 1;</code>
     */
    protected $phone = '';
    /**
     *验证长度
     *
     * Generated from protobuf field <code>int32 len = 2;</code>
     */
    protected $len = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone
     *          手机号码
     *     @type int $len
     *          验证长度
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
     *验证长度
     *
     * Generated from protobuf field <code>int32 len = 2;</code>
     * @return int
     */
    public function getLen()
    {
        return $this->len;
    }

    /**
     *验证长度
     *
     * Generated from protobuf field <code>int32 len = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLen($var)
    {
        GPBUtil::checkInt32($var);
        $this->len = $var;

        return $this;
    }

}

