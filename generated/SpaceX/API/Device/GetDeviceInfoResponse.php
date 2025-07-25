<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/device.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.GetDeviceInfoResponse</code>
 */
class GetDeviceInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DeviceInfo device_info = 1 [json_name = "deviceInfo"];</code>
     */
    protected $device_info = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \SpaceX\API\Device\DeviceInfo $device_info
     *                                     }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DeviceInfo device_info = 1 [json_name = "deviceInfo"];</code>
     *
     * @return \SpaceX\API\Device\DeviceInfo|null
     */
    public function getDeviceInfo()
    {
        return $this->device_info;
    }

    public function hasDeviceInfo()
    {
        return isset($this->device_info);
    }

    public function clearDeviceInfo()
    {
        unset($this->device_info);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DeviceInfo device_info = 1 [json_name = "deviceInfo"];</code>
     *
     * @param  \SpaceX\API\Device\DeviceInfo  $var
     * @return $this
     */
    public function setDeviceInfo($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\DeviceInfo::class);
        $this->device_info = $var;

        return $this;
    }
}
