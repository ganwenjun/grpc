<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/amap.proto

namespace GPBMetadata\Proto;

class Amap
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
?
proto/amap.protoproto"8
AmapLocationParam
origin (	
destination (	"
AmapGeoParam
address (	"?
AmapRegeoParam
location (	
poitype (	
radius (	

extensions (	
batch (
	roadlevel (	

homeorcorp ("j
AmapDistanceParam)
distanceType (2.proto.DistanceType*
location (2.proto.AmapLocationParam"w
AmapResponse\'
data (2.google.protobuf.AnyH ?
amapJson (	H?
	requestId (	B
_dataB
	_amapJson*C
DistanceType
straight 
driving
cycling
walkingBZ/pbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

