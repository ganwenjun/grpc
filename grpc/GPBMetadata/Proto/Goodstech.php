<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/goodstech.proto

namespace GPBMetadata\Proto;

class Goodstech
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
proto/goodstech.protoproto"#
GoodsTenchParam
photoUrl (	"L
ClassifyCommodity
score (
categoryName (	

categoryId (	"A
GoodsTenchResponse+
	categorys (2.proto.ClassifyCommodityBZ/pbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

