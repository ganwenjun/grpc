<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/oss.proto

namespace GPBMetadata\Proto;

class Oss
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
proto/oss.protoproto":
OSSPolicyTokenParam
	uploadDir (	
xUrlBody (	"�
OSSPolicyTokenResponse
accessid (	
host (	
expire (
	signature (	
policy (	
dir (	
callback (	
callbackurl (	"8
OSSUploadByteParam
saveFileName (	
file ("$
OSSFileUrlResponse
ossUrl (	BZ/pbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

