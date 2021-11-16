<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/pay.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.QihuiPayReturn</code>
 */
class QihuiPayReturn extends \Google\Protobuf\Internal\Message
{
    /**
     *支付状态
     *
     * Generated from protobuf field <code>int32 status = 1;</code>
     */
    protected $status = 0;
    /**
     *交易号
     *
     * Generated from protobuf field <code>string tradeNo = 2;</code>
     */
    protected $tradeNo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *          支付状态
     *     @type string $tradeNo
     *          交易号
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Pay::initOnce();
        parent::__construct($data);
    }

    /**
     *支付状态
     *
     * Generated from protobuf field <code>int32 status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *支付状态
     *
     * Generated from protobuf field <code>int32 status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->status = $var;

        return $this;
    }

    /**
     *交易号
     *
     * Generated from protobuf field <code>string tradeNo = 2;</code>
     * @return string
     */
    public function getTradeNo()
    {
        return $this->tradeNo;
    }

    /**
     *交易号
     *
     * Generated from protobuf field <code>string tradeNo = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTradeNo($var)
    {
        GPBUtil::checkString($var, True);
        $this->tradeNo = $var;

        return $this;
    }

}

