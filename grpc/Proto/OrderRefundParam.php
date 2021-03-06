<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/pay.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *订单退款提交参数
 *
 * Generated from protobuf message <code>proto.OrderRefundParam</code>
 */
class OrderRefundParam extends \Google\Protobuf\Internal\Message
{
    /**
     *商户订单号
     *
     * Generated from protobuf field <code>string oid = 1;</code>
     */
    protected $oid = '';
    /**
     *退款订单号（商户标记）
     *
     * Generated from protobuf field <code>string refundSn = 2;</code>
     */
    protected $refundSn = '';
    /**
     *退款金额
     *
     * Generated from protobuf field <code>int32 refundAmount = 3;</code>
     */
    protected $refundAmount = 0;
    /**
     *退款原因（非必填)
     *
     * Generated from protobuf field <code>string refundReason = 4;</code>
     */
    protected $refundReason = '';
    /**
     *退款结果通知地址
     *
     * Generated from protobuf field <code>string callbackUrl = 5;</code>
     */
    protected $callbackUrl = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $oid
     *          商户订单号
     *     @type string $refundSn
     *          退款订单号（商户标记）
     *     @type int $refundAmount
     *          退款金额
     *     @type string $refundReason
     *          退款原因（非必填)
     *     @type string $callbackUrl
     *          退款结果通知地址
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Pay::initOnce();
        parent::__construct($data);
    }

    /**
     *商户订单号
     *
     * Generated from protobuf field <code>string oid = 1;</code>
     * @return string
     */
    public function getOid()
    {
        return $this->oid;
    }

    /**
     *商户订单号
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
     *退款订单号（商户标记）
     *
     * Generated from protobuf field <code>string refundSn = 2;</code>
     * @return string
     */
    public function getRefundSn()
    {
        return $this->refundSn;
    }

    /**
     *退款订单号（商户标记）
     *
     * Generated from protobuf field <code>string refundSn = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRefundSn($var)
    {
        GPBUtil::checkString($var, True);
        $this->refundSn = $var;

        return $this;
    }

    /**
     *退款金额
     *
     * Generated from protobuf field <code>int32 refundAmount = 3;</code>
     * @return int
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     *退款金额
     *
     * Generated from protobuf field <code>int32 refundAmount = 3;</code>
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
     *退款原因（非必填)
     *
     * Generated from protobuf field <code>string refundReason = 4;</code>
     * @return string
     */
    public function getRefundReason()
    {
        return $this->refundReason;
    }

    /**
     *退款原因（非必填)
     *
     * Generated from protobuf field <code>string refundReason = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRefundReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->refundReason = $var;

        return $this;
    }

    /**
     *退款结果通知地址
     *
     * Generated from protobuf field <code>string callbackUrl = 5;</code>
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     *退款结果通知地址
     *
     * Generated from protobuf field <code>string callbackUrl = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCallbackUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->callbackUrl = $var;

        return $this;
    }

}

