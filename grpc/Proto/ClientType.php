<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/chat.proto

namespace Proto;

use UnexpectedValueException;

/**
 *会员类型
 *
 * Protobuf type <code>proto.ClientType</code>
 */
class ClientType
{
    /**
     *会员
     *
     * Generated from protobuf enum <code>MEMBER = 0;</code>
     */
    const MEMBER = 0;
    /**
     *商家
     *
     * Generated from protobuf enum <code>COMPANY = 1;</code>
     */
    const COMPANY = 1;
    /**
     *运营
     *
     * Generated from protobuf enum <code>MAMAGET = 3;</code>
     */
    const MAMAGET = 3;
    /**
     *配送员
     *
     * Generated from protobuf enum <code>EXPRESSER = 4;</code>
     */
    const EXPRESSER = 4;

    private static $valueToName = [
        self::MEMBER => 'MEMBER',
        self::COMPANY => 'COMPANY',
        self::MAMAGET => 'MAMAGET',
        self::EXPRESSER => 'EXPRESSER',
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

