<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/addr.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *地址查询入参
 *
 * Generated from protobuf message <code>proto.AddressParam</code>
 */
class AddressParam extends \Google\Protobuf\Internal\Message
{
    /**
     *地址或含地址字符串
     *
     * Generated from protobuf field <code>string address = 1;</code>
     */
    protected $address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *          地址或含地址字符串
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Addr::initOnce();
        parent::__construct($data);
    }

    /**
     *地址或含地址字符串
     *
     * Generated from protobuf field <code>string address = 1;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     *地址或含地址字符串
     *
     * Generated from protobuf field <code>string address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

}
