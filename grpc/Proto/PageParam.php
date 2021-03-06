<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/base.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.PageParam</code>
 */
class PageParam extends \Google\Protobuf\Internal\Message
{
    /**
     *页码
     *
     * Generated from protobuf field <code>int32 page = 1;</code>
     */
    protected $page = 0;
    /**
     *每页大小
     *
     * Generated from protobuf field <code>int32 pageSize = 2;</code>
     */
    protected $pageSize = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page
     *          页码
     *     @type int $pageSize
     *          每页大小
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Base::initOnce();
        parent::__construct($data);
    }

    /**
     *页码
     *
     * Generated from protobuf field <code>int32 page = 1;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     *页码
     *
     * Generated from protobuf field <code>int32 page = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

    /**
     *每页大小
     *
     * Generated from protobuf field <code>int32 pageSize = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     *每页大小
     *
     * Generated from protobuf field <code>int32 pageSize = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->pageSize = $var;

        return $this;
    }

}

