<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/wechat.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *解密数据
 *
 * Generated from protobuf message <code>proto.DecryptWeChatOpenDataParam</code>
 */
class DecryptWeChatOpenDataParam extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sessionKey = 1;</code>
     */
    protected $sessionKey = '';
    /**
     * Generated from protobuf field <code>string encryptedData = 2;</code>
     */
    protected $encryptedData = '';
    /**
     * Generated from protobuf field <code>string iv = 3;</code>
     */
    protected $iv = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sessionKey
     *     @type string $encryptedData
     *     @type string $iv
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Wechat::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sessionKey = 1;</code>
     * @return string
     */
    public function getSessionKey()
    {
        return $this->sessionKey;
    }

    /**
     * Generated from protobuf field <code>string sessionKey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->sessionKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string encryptedData = 2;</code>
     * @return string
     */
    public function getEncryptedData()
    {
        return $this->encryptedData;
    }

    /**
     * Generated from protobuf field <code>string encryptedData = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptedData($var)
    {
        GPBUtil::checkString($var, True);
        $this->encryptedData = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string iv = 3;</code>
     * @return string
     */
    public function getIv()
    {
        return $this->iv;
    }

    /**
     * Generated from protobuf field <code>string iv = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIv($var)
    {
        GPBUtil::checkString($var, True);
        $this->iv = $var;

        return $this;
    }

}
