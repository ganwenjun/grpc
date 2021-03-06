<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/goodstech.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.ClassifyCommodity</code>
 */
class ClassifyCommodity extends \Google\Protobuf\Internal\Message
{
    /**
     *评分 
     *
     * Generated from protobuf field <code>float score = 1;</code>
     */
    protected $score = 0.0;
    /**
     *分类名
     *
     * Generated from protobuf field <code>string categoryName = 2;</code>
     */
    protected $categoryName = '';
    /**
     *分类ID
     *
     * Generated from protobuf field <code>string categoryId = 3;</code>
     */
    protected $categoryId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $score
     *          评分 
     *     @type string $categoryName
     *          分类名
     *     @type string $categoryId
     *          分类ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Goodstech::initOnce();
        parent::__construct($data);
    }

    /**
     *评分 
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     *评分 
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     *分类名
     *
     * Generated from protobuf field <code>string categoryName = 2;</code>
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     *分类名
     *
     * Generated from protobuf field <code>string categoryName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCategoryName($var)
    {
        GPBUtil::checkString($var, True);
        $this->categoryName = $var;

        return $this;
    }

    /**
     *分类ID
     *
     * Generated from protobuf field <code>string categoryId = 3;</code>
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     *分类ID
     *
     * Generated from protobuf field <code>string categoryId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCategoryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->categoryId = $var;

        return $this;
    }

}

