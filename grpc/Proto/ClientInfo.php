<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/chat.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *客户端信息
 *
 * Generated from protobuf message <code>proto.ClientInfo</code>
 */
class ClientInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *发送者ID
     *
     * Generated from protobuf field <code>string sender = 1;</code>
     */
    protected $sender = '';
    /**
     *头像
     *
     * Generated from protobuf field <code>string avatar = 2;</code>
     */
    protected $avatar = '';
    /**
     *呢称
     *
     * Generated from protobuf field <code>string nickname = 3;</code>
     */
    protected $nickname = '';
    /**
     *类型
     *
     * Generated from protobuf field <code>.proto.ClientType type = 4;</code>
     */
    protected $type = 0;
    /**
     *连接时间
     *
     * Generated from protobuf field <code>string conntime = 5;</code>
     */
    protected $conntime = '';
    /**
     *所在的群组
     *
     * Generated from protobuf field <code>repeated string group = 6;</code>
     */
    private $group;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sender
     *          发送者ID
     *     @type string $avatar
     *          头像
     *     @type string $nickname
     *          呢称
     *     @type int $type
     *          类型
     *     @type string $conntime
     *          连接时间
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $group
     *          所在的群组
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Chat::initOnce();
        parent::__construct($data);
    }

    /**
     *发送者ID
     *
     * Generated from protobuf field <code>string sender = 1;</code>
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     *发送者ID
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
     *头像
     *
     * Generated from protobuf field <code>string avatar = 2;</code>
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     *头像
     *
     * Generated from protobuf field <code>string avatar = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAvatar($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar = $var;

        return $this;
    }

    /**
     *呢称
     *
     * Generated from protobuf field <code>string nickname = 3;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     *呢称
     *
     * Generated from protobuf field <code>string nickname = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

    /**
     *类型
     *
     * Generated from protobuf field <code>.proto.ClientType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *类型
     *
     * Generated from protobuf field <code>.proto.ClientType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Proto\ClientType::class);
        $this->type = $var;

        return $this;
    }

    /**
     *连接时间
     *
     * Generated from protobuf field <code>string conntime = 5;</code>
     * @return string
     */
    public function getConntime()
    {
        return $this->conntime;
    }

    /**
     *连接时间
     *
     * Generated from protobuf field <code>string conntime = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setConntime($var)
    {
        GPBUtil::checkString($var, True);
        $this->conntime = $var;

        return $this;
    }

    /**
     *所在的群组
     *
     * Generated from protobuf field <code>repeated string group = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     *所在的群组
     *
     * Generated from protobuf field <code>repeated string group = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroup($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->group = $arr;

        return $this;
    }

}

