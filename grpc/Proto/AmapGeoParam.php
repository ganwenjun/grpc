<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/amap.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *AmapGeoParam 地理编码
 *
 * Generated from protobuf message <code>proto.AmapGeoParam</code>
 */
class AmapGeoParam extends \Google\Protobuf\Internal\Message
{
    /**
     *地址
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
     *          地址
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Amap::initOnce();
        parent::__construct($data);
    }

    /**
     *地址
     *
     * Generated from protobuf field <code>string address = 1;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     *地址
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

