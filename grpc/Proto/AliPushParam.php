<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/alipush.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *阿里移动推送参数
 *
 * Generated from protobuf message <code>proto.AliPushParam</code>
 */
class AliPushParam extends \Google\Protobuf\Internal\Message
{
    /**
     *设备类型（ios,android）
     *
     * Generated from protobuf field <code>string deviceType = 1;</code>
     */
    protected $deviceType = '';
    /**
     *区分使用端）app，company
     *
     * Generated from protobuf field <code>string client = 2;</code>
     */
    protected $client = '';
    /**
     *标题
     *
     * Generated from protobuf field <code>string title = 3;</code>
     */
    protected $title = '';
    /**
     *消息体
     *
     * Generated from protobuf field <code>string body = 4;</code>
     */
    protected $body = '';
    /**
     *NOTICE通知,MESSAGE消息
     *
     * Generated from protobuf field <code>string pushType = 5;</code>
     */
    protected $pushType = '';
    /**
     *扩展参数(json字符串)
     *
     * Generated from protobuf field <code>string extParameters = 6;</code>
     */
    protected $extParameters = '';
    /**
     *DEVICE：根据设备推送。ACCOUNT：根据账号推送。ALIAS：根据别名推送。TAG：根据标签推送。
     *
     * Generated from protobuf field <code>string target = 7;</code>
     */
    protected $target = '';
    /**
     *根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。最多支持1000个
     *
     * Generated from protobuf field <code>string targetValue = 8;</code>
     */
    protected $targetValue = '';
    /**
     *用于定时发送，时间戳
     *
     * Generated from protobuf field <code>int64 pushTime = 9;</code>
     */
    protected $pushTime = 0;
    /**
     *离线消息/通知的过期时间
     *
     * Generated from protobuf field <code>int64 expireTime = 10;</code>
     */
    protected $expireTime = 0;
    /**
     *(ios时有用)DEV：表示开发环境。PRODUCT：表示生产环境。
     *
     * Generated from protobuf field <code>string iOSModel = 11;</code>
     */
    protected $iOSModel = '';
    /**
     *Android自定义通知栏样式，取值：1-100（IM使用3，其它的使用2）
     *
     * Generated from protobuf field <code>int32 androidBarType = 12;</code>
     */
    protected $androidBarType = 0;
    /**
     *离线消息/通知是否保存。
     *
     * Generated from protobuf field <code>bool storeOffline = 13;</code>
     */
    protected $storeOffline = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $deviceType
     *          设备类型（ios,android）
     *     @type string $client
     *          区分使用端）app，company
     *     @type string $title
     *          标题
     *     @type string $body
     *          消息体
     *     @type string $pushType
     *          NOTICE通知,MESSAGE消息
     *     @type string $extParameters
     *          扩展参数(json字符串)
     *     @type string $target
     *          DEVICE：根据设备推送。ACCOUNT：根据账号推送。ALIAS：根据别名推送。TAG：根据标签推送。
     *     @type string $targetValue
     *          根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。最多支持1000个
     *     @type int|string $pushTime
     *          用于定时发送，时间戳
     *     @type int|string $expireTime
     *          离线消息/通知的过期时间
     *     @type string $iOSModel
     *          (ios时有用)DEV：表示开发环境。PRODUCT：表示生产环境。
     *     @type int $androidBarType
     *          Android自定义通知栏样式，取值：1-100（IM使用3，其它的使用2）
     *     @type bool $storeOffline
     *          离线消息/通知是否保存。
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Alipush::initOnce();
        parent::__construct($data);
    }

    /**
     *设备类型（ios,android）
     *
     * Generated from protobuf field <code>string deviceType = 1;</code>
     * @return string
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     *设备类型（ios,android）
     *
     * Generated from protobuf field <code>string deviceType = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->deviceType = $var;

        return $this;
    }

    /**
     *区分使用端）app，company
     *
     * Generated from protobuf field <code>string client = 2;</code>
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     *区分使用端）app，company
     *
     * Generated from protobuf field <code>string client = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClient($var)
    {
        GPBUtil::checkString($var, True);
        $this->client = $var;

        return $this;
    }

    /**
     *标题
     *
     * Generated from protobuf field <code>string title = 3;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     *标题
     *
     * Generated from protobuf field <code>string title = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     *消息体
     *
     * Generated from protobuf field <code>string body = 4;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     *消息体
     *
     * Generated from protobuf field <code>string body = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, True);
        $this->body = $var;

        return $this;
    }

    /**
     *NOTICE通知,MESSAGE消息
     *
     * Generated from protobuf field <code>string pushType = 5;</code>
     * @return string
     */
    public function getPushType()
    {
        return $this->pushType;
    }

    /**
     *NOTICE通知,MESSAGE消息
     *
     * Generated from protobuf field <code>string pushType = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPushType($var)
    {
        GPBUtil::checkString($var, True);
        $this->pushType = $var;

        return $this;
    }

    /**
     *扩展参数(json字符串)
     *
     * Generated from protobuf field <code>string extParameters = 6;</code>
     * @return string
     */
    public function getExtParameters()
    {
        return $this->extParameters;
    }

    /**
     *扩展参数(json字符串)
     *
     * Generated from protobuf field <code>string extParameters = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExtParameters($var)
    {
        GPBUtil::checkString($var, True);
        $this->extParameters = $var;

        return $this;
    }

    /**
     *DEVICE：根据设备推送。ACCOUNT：根据账号推送。ALIAS：根据别名推送。TAG：根据标签推送。
     *
     * Generated from protobuf field <code>string target = 7;</code>
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     *DEVICE：根据设备推送。ACCOUNT：根据账号推送。ALIAS：根据别名推送。TAG：根据标签推送。
     *
     * Generated from protobuf field <code>string target = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->target = $var;

        return $this;
    }

    /**
     *根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。最多支持1000个
     *
     * Generated from protobuf field <code>string targetValue = 8;</code>
     * @return string
     */
    public function getTargetValue()
    {
        return $this->targetValue;
    }

    /**
     *根据Target来设定，多个值使用逗号分隔，超过限制需要分多次推送。最多支持1000个
     *
     * Generated from protobuf field <code>string targetValue = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->targetValue = $var;

        return $this;
    }

    /**
     *用于定时发送，时间戳
     *
     * Generated from protobuf field <code>int64 pushTime = 9;</code>
     * @return int|string
     */
    public function getPushTime()
    {
        return $this->pushTime;
    }

    /**
     *用于定时发送，时间戳
     *
     * Generated from protobuf field <code>int64 pushTime = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPushTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->pushTime = $var;

        return $this;
    }

    /**
     *离线消息/通知的过期时间
     *
     * Generated from protobuf field <code>int64 expireTime = 10;</code>
     * @return int|string
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     *离线消息/通知的过期时间
     *
     * Generated from protobuf field <code>int64 expireTime = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->expireTime = $var;

        return $this;
    }

    /**
     *(ios时有用)DEV：表示开发环境。PRODUCT：表示生产环境。
     *
     * Generated from protobuf field <code>string iOSModel = 11;</code>
     * @return string
     */
    public function getIOSModel()
    {
        return $this->iOSModel;
    }

    /**
     *(ios时有用)DEV：表示开发环境。PRODUCT：表示生产环境。
     *
     * Generated from protobuf field <code>string iOSModel = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setIOSModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->iOSModel = $var;

        return $this;
    }

    /**
     *Android自定义通知栏样式，取值：1-100（IM使用3，其它的使用2）
     *
     * Generated from protobuf field <code>int32 androidBarType = 12;</code>
     * @return int
     */
    public function getAndroidBarType()
    {
        return $this->androidBarType;
    }

    /**
     *Android自定义通知栏样式，取值：1-100（IM使用3，其它的使用2）
     *
     * Generated from protobuf field <code>int32 androidBarType = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setAndroidBarType($var)
    {
        GPBUtil::checkInt32($var);
        $this->androidBarType = $var;

        return $this;
    }

    /**
     *离线消息/通知是否保存。
     *
     * Generated from protobuf field <code>bool storeOffline = 13;</code>
     * @return bool
     */
    public function getStoreOffline()
    {
        return $this->storeOffline;
    }

    /**
     *离线消息/通知是否保存。
     *
     * Generated from protobuf field <code>bool storeOffline = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setStoreOffline($var)
    {
        GPBUtil::checkBool($var);
        $this->storeOffline = $var;

        return $this;
    }

}
