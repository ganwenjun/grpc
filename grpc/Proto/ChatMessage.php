<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/chat.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *聊天的信息
 *
 * Generated from protobuf message <code>proto.ChatMessage</code>
 */
class ChatMessage extends \Google\Protobuf\Internal\Message
{
    /**
     *发送者
     *
     * Generated from protobuf field <code>string sender = 1;</code>
     */
    protected $sender = '';
    /**
     *接收者
     *
     * Generated from protobuf field <code>string receiver = 2;</code>
     */
    protected $receiver = '';
    /**
     *是否群组信息（为真，receiver为群组名称，否则receiver为接收者sender）
     *
     * Generated from protobuf field <code>bool group = 3;</code>
     */
    protected $group = false;
    /**
     *消息
     *
     * Generated from protobuf field <code>string message = 4;</code>
     */
    protected $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *          发送者
     *     @type string $receiver
     *          接收者
     *     @type bool $group
     *          是否群组信息（为真，receiver为群组名称，否则receiver为接收者sender）
     *     @type string $message
     *          消息
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Chat::initOnce();
        parent::__construct($data);
    }

    /**
     *发送者
     *
     * Generated from protobuf field <code>string sender = 1;</code>
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     *发送者
     *
     * Generated from protobuf field <code>string sender = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSender($var)
    {
        GPBUtil::checkString($var, True);
        $this->sender = $var;

        return $this;
    }

    /**
     *接收者
     *
     * Generated from protobuf field <code>string receiver = 2;</code>
     * @return string
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     *接收者
     *
     * Generated from protobuf field <code>string receiver = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setReceiver($var)
    {
        GPBUtil::checkString($var, True);
        $this->receiver = $var;

        return $this;
    }

    /**
     *是否群组信息（为真，receiver为群组名称，否则receiver为接收者sender）
     *
     * Generated from protobuf field <code>bool group = 3;</code>
     * @return bool
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     *是否群组信息（为真，receiver为群组名称，否则receiver为接收者sender）
     *
     * Generated from protobuf field <code>bool group = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkBool($var);
        $this->group = $var;

        return $this;
    }

    /**
     *消息
     *
     * Generated from protobuf field <code>string message = 4;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     *消息
     *
     * Generated from protobuf field <code>string message = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

