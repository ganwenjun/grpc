<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/pay.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *订单退款同步回返回参数
 *
 * Generated from protobuf message <code>proto.OrderRefundReturn</code>
 */
class OrderRefundReturn extends \Google\Protobuf\Internal\Message
{
    /**
     *订单号
     *
     * Generated from protobuf field <code>string oid = 1;</code>
     */
    protected $oid = '';
    /**
     *退款金额
     *
     * Generated from protobuf field <code>int32 refundAmount = 2;</code>
     */
    protected $refundAmount = 0;
    /**
     *支付方退款交易号
     *
     * Generated from protobuf field <code>string tradeNo = 3;</code>
     */
    protected $tradeNo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $oid
     *          订单号
     *     @type int $refundAmount
     *          退款金额
     *     @type string $tradeNo
     *          支付方退款交易号
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Pay::initOnce();
        parent::__construct($data);
    }

    /**
     *订单号
     *
     * Generated from protobuf field <code>string oid = 1;</code>
     * @return string
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     *订单号
     *
     * Generated from protobuf field <code>string oid = 1;</code>
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
     *退款金额
     *
     * Generated from protobuf field <code>int32 refundAmount = 2;</code>
     * @return int
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     *退款金额
     *
     * Generated from protobuf field <code>int32 refundAmount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRefundAmount($var)
    {
        GPBUtil::checkInt32($var);
        $this->refundAmount = $var;

        return $this;
    }

    /**
     *支付方退款交易号
     *
     * Generated from protobuf field <code>string tradeNo = 3;</code>
     * @return string
     */
    public function getTradeNo()
    {
        return $this->tradeNo;
    }

    /**
     *支付方退款交易号
     *
     * Generated from protobuf field <code>string tradeNo = 3;</code>
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
