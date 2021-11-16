<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/amap.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *AmapDistanceParam 距离测量入参
 *
 * Generated from protobuf message <code>proto.AmapDistanceParam</code>
 */
class AmapDistanceParam extends \Google\Protobuf\Internal\Message
{
    /**
     *路径计算的方式和方法。0：直线距离，1：驾车导航距离（仅支持国内坐标），3：步行规划距离（仅支持5km之间的距离）
     *
     * Generated from protobuf field <code>.proto.DistanceType distanceType = 1;</code>
     */
    protected $distanceType = 0;
    /**
     * Generated from protobuf field <code>.proto.AmapLocationParam location = 2;</code>
     */
    protected $location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $distanceType
     *          路径计算的方式和方法。0：直线距离，1：驾车导航距离（仅支持国内坐标），3：步行规划距离（仅支持5km之间的距离）
     *     @type \Proto\AmapLocationParam $location
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Amap::initOnce();
        parent::__construct($data);
    }

    /**
     *路径计算的方式和方法。0：直线距离，1：驾车导航距离（仅支持国内坐标），3：步行规划距离（仅支持5km之间的距离）
     *
     * Generated from protobuf field <code>.proto.DistanceType distanceType = 1;</code>
     * @return int
     */
    public function getDistanceType()
    {
        return $this->distanceType;
    }

    /**
     *路径计算的方式和方法。0：直线距离，1：驾车导航距离（仅支持国内坐标），3：步行规划距离（仅支持5km之间的距离）
     *
     * Generated from protobuf field <code>.proto.DistanceType distanceType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDistanceType($var)
    {
        GPBUtil::checkEnum($var, \Proto\DistanceType::class);
        $this->distanceType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.AmapLocationParam location = 2;</code>
     * @return \Proto\AmapLocationParam|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * Generated from protobuf field <code>.proto.AmapLocationParam location = 2;</code>
     * @param \Proto\AmapLocationParam $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Proto\AmapLocationParam::class);
        $this->location = $var;

        return $this;
    }

}

