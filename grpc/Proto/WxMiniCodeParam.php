<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/wechat.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *WxMiniCodeParam 小程二维码入参
 *
 * Generated from protobuf message <code>proto.WxMiniCodeParam</code>
 */
class WxMiniCodeParam extends \Google\Protobuf\Internal\Message
{
    /**
     *小程序的APPID
     *
     * Generated from protobuf field <code>string appId = 1;</code>
     */
    protected $appId = '';
    /**
     *最大32个可见字符，只支持数字，大小写英文以及部分特殊字符
     *
     * Generated from protobuf field <code>optional string scene = 2;</code>
     */
    protected $scene = null;
    /**
     *必须是已经发布的小程序存在的页面（否则报错），例如 pages/index/index, 根路径前不要填加 /,不能携带参数（参数请放在scene字段里），如果不填写这个字段，默认跳主页面
     *
     * Generated from protobuf field <code>optional string page = 3;</code>
     */
    protected $page = null;
    /**
     *二维码线条颜色
     *
     * Generated from protobuf field <code>optional .proto.LineColorParam lineColor = 4;</code>
     */
    protected $lineColor = null;
    /**
     *二维码的宽度，单位 px，最小 280px，最大 1280px
     *
     * Generated from protobuf field <code>int32 width = 5;</code>
     */
    protected $width = 0;
    /**
     *是否需要透明底
     *
     * Generated from protobuf field <code>bool isHyaline = 6;</code>
     */
    protected $isHyaline = false;
    /**
     *如果为path简单二维码时不能为空，最大长度 128 字节
     *
     * Generated from protobuf field <code>string path = 7;</code>
     */
    protected $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $appId
     *          小程序的APPID
     *     @type string $scene
     *          最大32个可见字符，只支持数字，大小写英文以及部分特殊字符
     *     @type string $page
     *          必须是已经发布的小程序存在的页面（否则报错），例如 pages/index/index, 根路径前不要填加 /,不能携带参数（参数请放在scene字段里），如果不填写这个字段，默认跳主页面
     *     @type \Proto\LineColorParam $lineColor
     *          二维码线条颜色
     *     @type int $width
     *          二维码的宽度，单位 px，最小 280px，最大 1280px
     *     @type bool $isHyaline
     *          是否需要透明底
     *     @type string $path
     *          如果为path简单二维码时不能为空，最大长度 128 字节
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Wechat::initOnce();
        parent::__construct($data);
    }

    /**
     *小程序的APPID
     *
     * Generated from protobuf field <code>string appId = 1;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     *小程序的APPID
     *
     * Generated from protobuf field <code>string appId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->appId = $var;

        return $this;
    }

    /**
     *最大32个可见字符，只支持数字，大小写英文以及部分特殊字符
     *
     * Generated from protobuf field <code>optional string scene = 2;</code>
     * @return string
     */
    public function getScene()
    {
        return isset($this->scene) ? $this->scene : '';
    }

    public function hasScene()
    {
        return isset($this->scene);
    }

    public function clearScene()
    {
        unset($this->scene);
    }

    /**
     *最大32个可见字符，只支持数字，大小写英文以及部分特殊字符
     *
     * Generated from protobuf field <code>optional string scene = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkString($var, True);
        $this->scene = $var;

        return $this;
    }

    /**
     *必须是已经发布的小程序存在的页面（否则报错），例如 pages/index/index, 根路径前不要填加 /,不能携带参数（参数请放在scene字段里），如果不填写这个字段，默认跳主页面
     *
     * Generated from protobuf field <code>optional string page = 3;</code>
     * @return string
     */
    public function getPage()
    {
        return isset($this->page) ? $this->page : '';
    }

    public function hasPage()
    {
        return isset($this->page);
    }

    public function clearPage()
    {
        unset($this->page);
    }

    /**
     *必须是已经发布的小程序存在的页面（否则报错），例如 pages/index/index, 根路径前不要填加 /,不能携带参数（参数请放在scene字段里），如果不填写这个字段，默认跳主页面
     *
     * Generated from protobuf field <code>optional string page = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkString($var, True);
        $this->page = $var;

        return $this;
    }

    /**
     *二维码线条颜色
     *
     * Generated from protobuf field <code>optional .proto.LineColorParam lineColor = 4;</code>
     * @return \Proto\LineColorParam|null
     */
    public function getLineColor()
    {
        return $this->lineColor;
    }

    public function hasLineColor()
    {
        return isset($this->lineColor);
    }

    public function clearLineColor()
    {
        unset($this->lineColor);
    }

    /**
     *二维码线条颜色
     *
     * Generated from protobuf field <code>optional .proto.LineColorParam lineColor = 4;</code>
     * @param \Proto\LineColorParam $var
     * @return $this
     */
    public function setLineColor($var)
    {
        GPBUtil::checkMessage($var, \Proto\LineColorParam::class);
        $this->lineColor = $var;

        return $this;
    }

    /**
     *二维码的宽度，单位 px，最小 280px，最大 1280px
     *
     * Generated from protobuf field <code>int32 width = 5;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     *二维码的宽度，单位 px，最小 280px，最大 1280px
     *
     * Generated from protobuf field <code>int32 width = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->width = $var;

        return $this;
    }

    /**
     *是否需要透明底
     *
     * Generated from protobuf field <code>bool isHyaline = 6;</code>
     * @return bool
     */
    public function getIsHyaline()
    {
        return $this->isHyaline;
    }

    /**
     *是否需要透明底
     *
     * Generated from protobuf field <code>bool isHyaline = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsHyaline($var)
    {
        GPBUtil::checkBool($var);
        $this->isHyaline = $var;

        return $this;
    }

    /**
     *如果为path简单二维码时不能为空，最大长度 128 字节
     *
     * Generated from protobuf field <code>string path = 7;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     *如果为path简单二维码时不能为空，最大长度 128 字节
     *
     * Generated from protobuf field <code>string path = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}

