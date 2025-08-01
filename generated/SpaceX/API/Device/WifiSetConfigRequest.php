<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/wifi.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiSetConfigRequest</code>
 */
class WifiSetConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiConfig wifi_config = 1 [json_name = "wifiConfig"];</code>
     */
    protected $wifi_config = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \SpaceX\API\Device\WifiConfig $wifi_config
     *                                     }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Wifi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiConfig wifi_config = 1 [json_name = "wifiConfig"];</code>
     *
     * @return \SpaceX\API\Device\WifiConfig|null
     */
    public function getWifiConfig()
    {
        return $this->wifi_config;
    }

    public function hasWifiConfig()
    {
        return isset($this->wifi_config);
    }

    public function clearWifiConfig()
    {
        unset($this->wifi_config);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiConfig wifi_config = 1 [json_name = "wifiConfig"];</code>
     *
     * @param  \SpaceX\API\Device\WifiConfig  $var
     * @return $this
     */
    public function setWifiConfig($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiConfig::class);
        $this->wifi_config = $var;

        return $this;
    }
}
