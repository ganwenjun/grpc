<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/wechat.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.WxPublicUserInfo</code>
 */
class WxPublicUserInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *用户是否订阅该公众号标识，值为0时，代表此用户没有关注该公众号，拉取不到其余信息。
     *
     * Generated from protobuf field <code>int32 subscribe = 1;</code>
     */
    protected $subscribe = 0;
    /**
     *用户的标识，对当前公众号唯一
     *
     * Generated from protobuf field <code>string openId = 2;</code>
     */
    protected $openId = '';
    /**
     *用户的昵称
     *
     * Generated from protobuf field <code>string nickName = 3;</code>
     */
    protected $nickName = '';
    /**
     *用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
     *
     * Generated from protobuf field <code>int32 sex = 4;</code>
     */
    protected $sex = 0;
    /**
     *用户所在城市
     *
     * Generated from protobuf field <code>string city = 5;</code>
     */
    protected $city = '';
    /**
     *用户所在省份
     *
     * Generated from protobuf field <code>string province = 6;</code>
     */
    protected $province = '';
    /**
     *用户所在国家
     *
     * Generated from protobuf field <code>string country = 7;</code>
     */
    protected $country = '';
    /**
     *用户的语言，简体中文为zh_CN
     *
     * Generated from protobuf field <code>string language = 8;</code>
     */
    protected $language = '';
    /**
     *用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像），用户没有头像时该项为空。若用户更换头像，原有头像URL将失效。
     *
     * Generated from protobuf field <code>string headImageUrl = 9;</code>
     */
    protected $headImageUrl = '';
    /**
     *用户关注时间，为时间戳。如果用户曾多次关注，则取最后关注时间
     *
     * Generated from protobuf field <code>int32 subscribeTime = 10;</code>
     */
    protected $subscribeTime = 0;
    /**
     *只有在用户将公众号绑定到微信开放平台帐号后，才会出现该字段。
     *
     * Generated from protobuf field <code>string unionId = 11;</code>
     */
    protected $unionId = '';
    /**
     *公众号运营者对粉丝的备注，公众号运营者可在微信公众平台用户管理界面对粉丝添加备注
     *
     * Generated from protobuf field <code>string remark = 12;</code>
     */
    protected $remark = '';
    /**
     * 用户所在的分组ID（兼容旧的用户分组接口）
     *
     * Generated from protobuf field <code>int32 groupId = 13;</code>
     */
    protected $groupId = 0;
    /**
     *用户被打上的标签ID列表
     *
     * Generated from protobuf field <code>repeated int32 tagidList = 14;</code>
     */
    private $tagidList;
    /**
     *返回用户关注的渠道来源，ADD_SCENE_SEARCH 公众号搜索，ADD_SCENE_ACCOUNT_MIGRATION 公众号迁移，ADD_SCENE_PROFILE_CARD 名片分享，ADD_SCENE_QR_CODE 扫描二维码，ADD_SCENEPROFILE LINK 图文页内名称点击，ADD_SCENE_PROFILE_ITEM 图文页右上角菜单，ADD_SCENE_PAID 支付后关注，ADD_SCENE_OTHERS 其他
     *
     * Generated from protobuf field <code>string subscribeScene = 15;</code>
     */
    protected $subscribeScene = '';
    /**
     *二维码扫码场景（开发者自定义）
     *
     * Generated from protobuf field <code>int32 qrScene = 16;</code>
     */
    protected $qrScene = 0;
    /**
     *二维码扫码场景描述（开发者自定义）
     *
     * Generated from protobuf field <code>string qrSceneStr = 17;</code>
     */
    protected $qrSceneStr = '';
    /**
     *错误码
     *
     * Generated from protobuf field <code>int32 errCode = 18;</code>
     */
    protected $errCode = 0;
    /**
     *错误信息
     *
     * Generated from protobuf field <code>string errMsg = 19;</code>
     */
    protected $errMsg = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $subscribe
     *          用户是否订阅该公众号标识，值为0时，代表此用户没有关注该公众号，拉取不到其余信息。
     *     @type string $openId
     *          用户的标识，对当前公众号唯一
     *     @type string $nickName
     *          用户的昵称
     *     @type int $sex
     *          用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
     *     @type string $city
     *          用户所在城市
     *     @type string $province
     *          用户所在省份
     *     @type string $country
     *          用户所在国家
     *     @type string $language
     *          用户的语言，简体中文为zh_CN
     *     @type string $headImageUrl
     *          用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像），用户没有头像时该项为空。若用户更换头像，原有头像URL将失效。
     *     @type int $subscribeTime
     *          用户关注时间，为时间戳。如果用户曾多次关注，则取最后关注时间
     *     @type string $unionId
     *          只有在用户将公众号绑定到微信开放平台帐号后，才会出现该字段。
     *     @type string $remark
     *          公众号运营者对粉丝的备注，公众号运营者可在微信公众平台用户管理界面对粉丝添加备注
     *     @type int $groupId
     *           用户所在的分组ID（兼容旧的用户分组接口）
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $tagidList
     *          用户被打上的标签ID列表
     *     @type string $subscribeScene
     *          返回用户关注的渠道来源，ADD_SCENE_SEARCH 公众号搜索，ADD_SCENE_ACCOUNT_MIGRATION 公众号迁移，ADD_SCENE_PROFILE_CARD 名片分享，ADD_SCENE_QR_CODE 扫描二维码，ADD_SCENEPROFILE LINK 图文页内名称点击，ADD_SCENE_PROFILE_ITEM 图文页右上角菜单，ADD_SCENE_PAID 支付后关注，ADD_SCENE_OTHERS 其他
     *     @type int $qrScene
     *          二维码扫码场景（开发者自定义）
     *     @type string $qrSceneStr
     *          二维码扫码场景描述（开发者自定义）
     *     @type int $errCode
     *          错误码
     *     @type string $errMsg
     *          错误信息
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Wechat::initOnce();
        parent::__construct($data);
    }

    /**
     *用户是否订阅该公众号标识，值为0时，代表此用户没有关注该公众号，拉取不到其余信息。
     *
     * Generated from protobuf field <code>int32 subscribe = 1;</code>
     * @return int
     */
    public function getSubscribe()
    {
        return $this->subscribe;
    }

    /**
     *用户是否订阅该公众号标识，值为0时，代表此用户没有关注该公众号，拉取不到其余信息。
     *
     * Generated from protobuf field <code>int32 subscribe = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSubscribe($var)
    {
        GPBUtil::checkInt32($var);
        $this->subscribe = $var;

        return $this;
    }

    /**
     *用户的标识，对当前公众号唯一
     *
     * Generated from protobuf field <code>string openId = 2;</code>
     * @return string
     */
    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     *用户的标识，对当前公众号唯一
     *
     * Generated from protobuf field <code>string openId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOpenId($var)
    {
        GPBUtil::checkString($var, True);
        $this->openId = $var;

        return $this;
    }

    /**
     *用户的昵称
     *
     * Generated from protobuf field <code>string nickName = 3;</code>
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     *用户的昵称
     *
     * Generated from protobuf field <code>string nickName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNickName($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickName = $var;

        return $this;
    }

    /**
     *用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
     *
     * Generated from protobuf field <code>int32 sex = 4;</code>
     * @return int
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     *用户的性别，值为1时是男性，值为2时是女性，值为0时是未知
     *
     * Generated from protobuf field <code>int32 sex = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSex($var)
    {
        GPBUtil::checkInt32($var);
        $this->sex = $var;

        return $this;
    }

    /**
     *用户所在城市
     *
     * Generated from protobuf field <code>string city = 5;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     *用户所在城市
     *
     * Generated from protobuf field <code>string city = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     *用户所在省份
     *
     * Generated from protobuf field <code>string province = 6;</code>
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     *用户所在省份
     *
     * Generated from protobuf field <code>string province = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setProvince($var)
    {
        GPBUtil::checkString($var, True);
        $this->province = $var;

        return $this;
    }

    /**
     *用户所在国家
     *
     * Generated from protobuf field <code>string country = 7;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     *用户所在国家
     *
     * Generated from protobuf field <code>string country = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     *用户的语言，简体中文为zh_CN
     *
     * Generated from protobuf field <code>string language = 8;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     *用户的语言，简体中文为zh_CN
     *
     * Generated from protobuf field <code>string language = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;

        return $this;
    }

    /**
     *用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像），用户没有头像时该项为空。若用户更换头像，原有头像URL将失效。
     *
     * Generated from protobuf field <code>string headImageUrl = 9;</code>
     * @return string
     */
    public function getHeadImageUrl()
    {
        return $this->headImageUrl;
    }

    /**
     *用户头像，最后一个数值代表正方形头像大小（有0、46、64、96、132数值可选，0代表640*640正方形头像），用户没有头像时该项为空。若用户更换头像，原有头像URL将失效。
     *
     * Generated from protobuf field <code>string headImageUrl = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->headImageUrl = $var;

        return $this;
    }

    /**
     *用户关注时间，为时间戳。如果用户曾多次关注，则取最后关注时间
     *
     * Generated from protobuf field <code>int32 subscribeTime = 10;</code>
     * @return int
     */
    public function getSubscribeTime()
    {
        return $this->subscribeTime;
    }

    /**
     *用户关注时间，为时间戳。如果用户曾多次关注，则取最后关注时间
     *
     * Generated from protobuf field <code>int32 subscribeTime = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setSubscribeTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->subscribeTime = $var;

        return $this;
    }

    /**
     *只有在用户将公众号绑定到微信开放平台帐号后，才会出现该字段。
     *
     * Generated from protobuf field <code>string unionId = 11;</code>
     * @return string
     */
    public function getUnionId()
    {
        return $this->unionId;
    }

    /**
     *只有在用户将公众号绑定到微信开放平台帐号后，才会出现该字段。
     *
     * Generated from protobuf field <code>string unionId = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setUnionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unionId = $var;

        return $this;
    }

    /**
     *公众号运营者对粉丝的备注，公众号运营者可在微信公众平台用户管理界面对粉丝添加备注
     *
     * Generated from protobuf field <code>string remark = 12;</code>
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     *公众号运营者对粉丝的备注，公众号运营者可在微信公众平台用户管理界面对粉丝添加备注
     *
     * Generated from protobuf field <code>string remark = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setRemark($var)
    {
        GPBUtil::checkString($var, True);
        $this->remark = $var;

        return $this;
    }

    /**
     * 用户所在的分组ID（兼容旧的用户分组接口）
     *
     * Generated from protobuf field <code>int32 groupId = 13;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * 用户所在的分组ID（兼容旧的用户分组接口）
     *
     * Generated from protobuf field <code>int32 groupId = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkInt32($var);
        $this->groupId = $var;

        return $this;
    }

    /**
     *用户被打上的标签ID列表
     *
     * Generated from protobuf field <code>repeated int32 tagidList = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTagidList()
    {
        return $this->tagidList;
    }

    /**
     *用户被打上的标签ID列表
     *
     * Generated from protobuf field <code>repeated int32 tagidList = 14;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTagidList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->tagidList = $arr;

        return $this;
    }

    /**
     *返回用户关注的渠道来源，ADD_SCENE_SEARCH 公众号搜索，ADD_SCENE_ACCOUNT_MIGRATION 公众号迁移，ADD_SCENE_PROFILE_CARD 名片分享，ADD_SCENE_QR_CODE 扫描二维码，ADD_SCENEPROFILE LINK 图文页内名称点击，ADD_SCENE_PROFILE_ITEM 图文页右上角菜单，ADD_SCENE_PAID 支付后关注，ADD_SCENE_OTHERS 其他
     *
     * Generated from protobuf field <code>string subscribeScene = 15;</code>
     * @return string
     */
    public function getSubscribeScene()
    {
        return $this->subscribeScene;
    }

    /**
     *返回用户关注的渠道来源，ADD_SCENE_SEARCH 公众号搜索，ADD_SCENE_ACCOUNT_MIGRATION 公众号迁移，ADD_SCENE_PROFILE_CARD 名片分享，ADD_SCENE_QR_CODE 扫描二维码，ADD_SCENEPROFILE LINK 图文页内名称点击，ADD_SCENE_PROFILE_ITEM 图文页右上角菜单，ADD_SCENE_PAID 支付后关注，ADD_SCENE_OTHERS 其他
     *
     * Generated from protobuf field <code>string subscribeScene = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscribeScene($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscribeScene = $var;

        return $this;
    }

    /**
     *二维码扫码场景（开发者自定义）
     *
     * Generated from protobuf field <code>int32 qrScene = 16;</code>
     * @return int
     */
    public function getQrScene()
    {
        return $this->qrScene;
    }

    /**
     *二维码扫码场景（开发者自定义）
     *
     * Generated from protobuf field <code>int32 qrScene = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setQrScene($var)
    {
        GPBUtil::checkInt32($var);
        $this->qrScene = $var;

        return $this;
    }

    /**
     *二维码扫码场景描述（开发者自定义）
     *
     * Generated from protobuf field <code>string qrSceneStr = 17;</code>
     * @return string
     */
    public function getQrSceneStr()
    {
        return $this->qrSceneStr;
    }

    /**
     *二维码扫码场景描述（开发者自定义）
     *
     * Generated from protobuf field <code>string qrSceneStr = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setQrSceneStr($var)
    {
        GPBUtil::checkString($var, True);
        $this->qrSceneStr = $var;

        return $this;
    }

    /**
     *错误码
     *
     * Generated from protobuf field <code>int32 errCode = 18;</code>
     * @return int
     */
    public function getErrCode()
    {
        return $this->errCode;
    }

    /**
     *错误码
     *
     * Generated from protobuf field <code>int32 errCode = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setErrCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->errCode = $var;

        return $this;
    }

    /**
     *错误信息
     *
     * Generated from protobuf field <code>string errMsg = 19;</code>
     * @return string
     */
    public function getErrMsg()
    {
        return $this->errMsg;
    }

    /**
     *错误信息
     *
     * Generated from protobuf field <code>string errMsg = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setErrMsg($var)
    {
        GPBUtil::checkString($var, True);
        $this->errMsg = $var;

        return $this;
    }

}

