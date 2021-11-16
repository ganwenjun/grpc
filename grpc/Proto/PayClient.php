<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Proto;

/**
 */
class PayClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 订单支付
     * @param \Proto\PayParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcPayOrder(\Proto\PayParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Pay/RpcPayOrder',
        $argument,
        ['\Proto\PayReturn', 'decode'],
        $metadata, $options);
    }

    /**
     * 订单支付查询订单
     * @param \Proto\QueryOrderParam $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RpcQueryOrder(\Proto\QueryOrderParam $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/proto.Pay/RpcQueryOrder',
        $argument,
        ['\Proto\QueryOrderRetrun', 'decode'],
        $metadata, $options);
    }

}
