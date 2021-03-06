<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/upload.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.UploadResponse</code>
 */
class UploadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Message = 1;</code>
     */
    protected $Message = '';
    /**
     * Generated from protobuf field <code>.proto.UploadStatusCode Code = 2;</code>
     */
    protected $Code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Message
     *     @type int $Code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Upload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Generated from protobuf field <code>string Message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->Message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.UploadStatusCode Code = 2;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * Generated from protobuf field <code>.proto.UploadStatusCode Code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Proto\UploadStatusCode::class);
        $this->Code = $var;

        return $this;
    }

}

