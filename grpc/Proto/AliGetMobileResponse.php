<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/dypns.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *手机号码
 *
 * Generated from protobuf message <code>proto.AliGetMobileResponse</code>
 */
class AliGetMobileResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *手机号码
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     */
    protected $mobile = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mobile
     *          手机号码
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Dypns::initOnce();
        parent::__construct($data);
    }

    /**
     *手机号码
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     *手机号码
     *
     * Generated from protobuf field <code>string mobile = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

}

