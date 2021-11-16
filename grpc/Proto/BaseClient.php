<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto;

/**
 */
class BaseClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 发送身份认证短信
     * @param \Proto\SendAuthSmsParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcSendAuthSms(\Proto\SendAuthSmsParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcSendAuthSms',
        $argument,
        ['\Proto\SendSmsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 验证身份验证短信
     * @param \Proto\VerifyAuthSmsParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcVerifyAuthSms(\Proto\VerifyAuthSmsParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcVerifyAuthSms',
        $argument,
        ['\Proto\VerifyAuthSmsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 通用发送短信服务
     * @param \Proto\SendSmsParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcSendSms(\Proto\SendSmsParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcSendSms',
        $argument,
        ['\Proto\SendSmsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * OSS服务端签名客户端上传参数
     * @param \Proto\OSSPolicyTokenParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcGetPolicyToken(\Proto\OSSPolicyTokenParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcGetPolicyToken',
        $argument,
        ['\Proto\OSSPolicyTokenResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * OSS上传byte数组
     * @param \Proto\OSSUploadByteParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcOssUploadByte(\Proto\OSSUploadByteParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcOssUploadByte',
        $argument,
        ['\Proto\OSSFileUrlResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 物流面单信息提取
     * @param \Proto\AddressParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcExpressExtract(\Proto\AddressParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcExpressExtract',
        $argument,
        ['\Proto\ExpressExtractResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 地址补全
     * @param \Proto\AddressParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcCompleteAddress(\Proto\AddressParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcCompleteAddress',
        $argument,
        ['\Proto\CompleteAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 阿里号码认证
     * @param \Proto\AliGetMobileParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcAliGetMobile(\Proto\AliGetMobileParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcAliGetMobile',
        $argument,
        ['\Proto\AliGetMobileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 阿里语音验证码
     * @param \Proto\CallTTSParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcCallTTS(\Proto\CallTTSParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcCallTTS',
        $argument,
        ['\Proto\CallResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 阿里语音通知（语音文件）
     * @param \Proto\CallVoiceParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcCallVoice(\Proto\CallVoiceParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcCallVoice',
        $argument,
        ['\Proto\CallResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 阿里商品图片识别分类
     * @param \Proto\GoodsTenchParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcAliGoodstech(\Proto\GoodsTenchParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcAliGoodstech',
        $argument,
        ['\Proto\GoodsTenchResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 阿里一句语音识别
     * @param \Proto\UploadParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcSpeechRecognizer(\Proto\UploadParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcSpeechRecognizer',
        $argument,
        ['\Proto\RecognizeSpeechResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 营业执照照片识别
     * @param \Proto\RecognizeBusinessLicenseParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcBusinessLicenseRecognizer(\Proto\RecognizeBusinessLicenseParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcBusinessLicenseRecognizer',
        $argument,
        ['\Proto\RecognizeBusinessLicenseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 身份证照片识别
     * @param \Proto\RecognizeIdentityCardParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcIdentityCardRecognizer(\Proto\RecognizeIdentityCardParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcIdentityCardRecognizer',
        $argument,
        ['\Proto\RecognizeIdentityCardResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 阿里移动推送
     * @param \Proto\AliPushParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcAliPush(\Proto\AliPushParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcAliPush',
        $argument,
        ['\Proto\AliPushResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 高德-骑行规划
     * @param \Proto\AmapLocationParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcAmapCycling(\Proto\AmapLocationParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcAmapCycling',
        $argument,
        ['\Proto\AmapResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 高德-地理编码
     * @param \Proto\AmapGeoParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcAmapGeo(\Proto\AmapGeoParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcAmapGeo',
        $argument,
        ['\Proto\AmapResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 高德-逆地理编码
     * @param \Proto\AmapRegeoParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcAmapRegeo(\Proto\AmapRegeoParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcAmapRegeo',
        $argument,
        ['\Proto\AmapResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 高德-距离测量
     * @param \Proto\AmapDistanceParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcAmapDistance(\Proto\AmapDistanceParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcAmapDistance',
        $argument,
        ['\Proto\AmapResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 小票打印服务
     * @param \Proto\MqttPrintOrderParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcMqttPrintOrder(\Proto\MqttPrintOrderParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcMqttPrintOrder',
        $argument,
        ['\Proto\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 云喇叭服务
     * @param \Proto\MqttVoiceNoticeParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcMqttNotice(\Proto\MqttVoiceNoticeParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcMqttNotice',
        $argument,
        ['\Proto\BaseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取MQTT服务器所有在线客户端列表
     * @param \Proto\MqttQueryClinetsParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcMqttClientList(\Proto\MqttQueryClinetsParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcMqttClientList',
        $argument,
        ['\Proto\MqttClientsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 微信小程序二维码（自定义）
     * @param \Proto\WxMiniCodeParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcCreateMiniSceneCode(\Proto\WxMiniCodeParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcCreateMiniSceneCode',
        $argument,
        ['\Proto\MiniCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 微信小程序二维码（简单）
     * @param \Proto\WxMiniPathParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcCreateMiniDefaultCode(\Proto\WxMiniPathParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcCreateMiniDefaultCode',
        $argument,
        ['\Proto\MiniCodeResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 微信用户code换session
     * @param \Proto\WxUserParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcWxCodeGetSession(\Proto\WxUserParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcWxCodeGetSession',
        $argument,
        ['\Proto\WxSessionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 微信用户Openid换用户信息
     * @param \Proto\WxUserParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcWxOpenIdGetUserInfo(\Proto\WxUserParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcWxOpenIdGetUserInfo',
        $argument,
        ['\Proto\WxPublicUserInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * 微信小程序解密用户手机号码
     * @param \Proto\WxUserParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcWxDecryptPhoneInfo(\Proto\WxUserParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcWxDecryptPhoneInfo',
        $argument,
        ['\Proto\WxDecryptPhoneResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * 微信小程序解密用户信息
     * @param \Proto\WxUserParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcWxDecryptUserInfo(\Proto\WxUserParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Base/RpcWxDecryptUserInfo',
        $argument,
        ['\Proto\WxDecryptUserInfoResponse', 'decode'],
        $metadata, $options);
    }

}
