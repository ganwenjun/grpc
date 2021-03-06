<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/oss.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *OSS服务端签名客户端上传
 *
 * Generated from protobuf message <code>proto.OSSPolicyTokenParam</code>
 */
class OSSPolicyTokenParam extends \Google\Protobuf\Internal\Message
{
    /**
     *上传OSS前缀（保存文件夹）
     *
     * Generated from protobuf field <code>string uploadDir = 1;</code>
     */
    protected $uploadDir = '';
    /**
     *回调中添加的x参数（透传参数）
     *
     * Generated from protobuf field <code>string xUrlBody = 2;</code>
     */
    protected $xUrlBody = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uploadDir
     *          上传OSS前缀（保存文件夹）
     *     @type string $xUrlBody
     *          回调中添加的x参数（透传参数）
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Oss::initOnce();
        parent::__construct($data);
    }

    /**
     *上传OSS前缀（保存文件夹）
     *
     * Generated from protobuf field <code>string uploadDir = 1;</code>
     * @return string
     */
    public function getUploadDir()
    {
        return $this->uploadDir;
    }

    /**
     *上传OSS前缀（保存文件夹）
     *
     * Generated from protobuf field <code>string uploadDir = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUploadDir($var)
    {
        GPBUtil::checkString($var, True);
        $this->uploadDir = $var;

        return $this;
    }

    /**
     *回调中添加的x参数（透传参数）
     *
     * Generated from protobuf field <code>string xUrlBody = 2;</code>
     * @return string
     */
    public function getXUrlBody()
    {
        return $this->xUrlBody;
    }

    /**
     *回调中添加的x参数（透传参数）
     *
     * Generated from protobuf field <code>string xUrlBody = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setXUrlBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->xUrlBody = $var;

        return $this;
    }

}

