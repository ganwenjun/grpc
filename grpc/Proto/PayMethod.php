<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/pay.proto

namespace Proto;

use UnexpectedValueException;

/**
 * Protobuf type <code>proto.PayMethod</code>
 */
class PayMethod
{
    /**
     *余额支付
     *
     * Generated from protobuf enum <code>BALANCE = 0;</code>
     */
    const BALANCE = 0;
    /**
     *微信APP
     *
     * Generated from protobuf enum <code>WXAPP = 1;</code>
     */
    const WXAPP = 1;
    /**
     *微信小程序
     *
     * Generated from protobuf enum <code>WXMINI = 2;</code>
     */
    const WXMINI = 2;
    /**
     *微信公众号
     *
     * Generated from protobuf enum <code>WXMP = 3;</code>
     */
    const WXMP = 3;
    /**
     *微信H5支付
     *
     * Generated from protobuf enum <code>WXH5 = 4;</code>
     */
    const WXH5 = 4;
    /**
     *支付宝APP
     *
     * Generated from protobuf enum <code>ALIAPP = 5;</code>
     */
    const ALIAPP = 5;
    /**
     *支付宝H5网页
     *
     * Generated from protobuf enum <code>ALIWAP = 6;</code>
     */
    const ALIWAP = 6;

    private static $valueToName = [
        self::BALANCE => 'BALANCE',
        self::WXAPP => 'WXAPP',
        self::WXMINI => 'WXMINI',
        self::WXMP => 'WXMP',
        self::WXH5 => 'WXH5',
        self::ALIAPP => 'ALIAPP',
        self::ALIWAP => 'ALIWAP',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

