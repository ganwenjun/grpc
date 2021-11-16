<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto;

/**
 */
class ChatClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 处理流上所有消息的路由。
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function RouteChat($metadata = [], $options = []) {
        return $this->_bidiRequest('/proto.Chat/RouteChat',
        ['\Proto\ChatMessage','decode'],
        $metadata, $options);
    }

    /**
     * 从服务器的用户集合中删除用户以及该用户可能所在的任何组。
     * @param \Proto\ClientInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnRegister(\Proto\ClientInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Chat/UnRegister',
        $argument,
        ['\Proto\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * 将用户添加到服务器的用户集合中（并进一步限制用户名）。
     * @param \Proto\ClientInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Register(\Proto\ClientInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Chat/Register',
        $argument,
        ['\Proto\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * 创建一个新组，前提是该组尚不存在。
     * @param \Proto\GroupInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateGroup(\Proto\GroupInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Chat/CreateGroup',
        $argument,
        ['\Proto\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * 将用户添加到现有组。
     * @param \Proto\GroupInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function JoinGroup(\Proto\GroupInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Chat/JoinGroup',
        $argument,
        ['\Proto\PBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * 将获取服务器上当前注册的所有组。
     * @param \Proto\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetGroupList(\Proto\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Chat/GetGroupList',
        $argument,
        ['\Proto\GroupList', 'decode'],
        $metadata, $options);
    }

    /**
     * 将获取当前属于特定组的所有客户。
     * @param \Proto\GroupInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetGroupClientList(\Proto\GroupInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Chat/GetGroupClientList',
        $argument,
        ['\Proto\ClientList', 'decode'],
        $metadata, $options);
    }

    /**
     * 将所有当前连接的客户端都连接到服务器。
     * @param \Proto\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetClientList(\Proto\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Chat/GetClientList',
        $argument,
        ['\Proto\ClientList', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取当前用户的详细信信
     * @param \Proto\ClientInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetClinetInfo(\Proto\ClientInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Chat/GetClinetInfo',
        $argument,
        ['\Proto\ClientInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * 从用户组中删除用户。
     * @param \Proto\GroupInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LeaveRoom(\Proto\GroupInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Chat/LeaveRoom',
        $argument,
        ['\Proto\PBEmpty', 'decode'],
        $metadata, $options);
    }

}
