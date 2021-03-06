<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/wechat.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *返回二维码图片数据
 *
 * Generated from protobuf message <code>proto.MiniCodeResponse</code>
 */
class MiniCodeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *图片的二进制
     *
     * Generated from protobuf field <code>bytes image = 1;</code>
     */
    protected $image = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image
     *          图片的二进制
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Wechat::initOnce();
        parent::__construct($data);
    }

    /**
     *图片的二进制
     *
     * Generated from protobuf field <code>bytes image = 1;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     *图片的二进制
     *
     * Generated from protobuf field <code>bytes image = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, False);
        $this->image = $var;

        return $this;
    }

}

