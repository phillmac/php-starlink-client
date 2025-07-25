<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/wifi.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiGlobalMeshStatus</code>
 */
class WifiGlobalMeshStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string hardware_version = 1 [json_name = "hardwareVersion"];</code>
     */
    protected $hardware_version = null;

    /**
     * Generated from protobuf field <code>optional string software_version = 2 [json_name = "softwareVersion"];</code>
     */
    protected $software_version = null;

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.InflatedBasicServiceSet bss_list = 3 [json_name = "bssList"];</code>
     */
    private $bss_list;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $hardware_version
     * @type string $software_version
     * @type array<\SpaceX\API\Device\InflatedBasicServiceSet>|\Google\Protobuf\Internal\RepeatedField $bss_list
     *                                                                                                 }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Wifi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string hardware_version = 1 [json_name = "hardwareVersion"];</code>
     *
     * @return string
     */
    public function getHardwareVersion()
    {
        return isset($this->hardware_version) ? $this->hardware_version : '';
    }

    public function hasHardwareVersion()
    {
        return isset($this->hardware_version);
    }

    public function clearHardwareVersion()
    {
        unset($this->hardware_version);
    }

    /**
     * Generated from protobuf field <code>optional string hardware_version = 1 [json_name = "hardwareVersion"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setHardwareVersion($var)
    {
        GPBUtil::checkString($var, true);
        $this->hardware_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string software_version = 2 [json_name = "softwareVersion"];</code>
     *
     * @return string
     */
    public function getSoftwareVersion()
    {
        return isset($this->software_version) ? $this->software_version : '';
    }

    public function hasSoftwareVersion()
    {
        return isset($this->software_version);
    }

    public function clearSoftwareVersion()
    {
        unset($this->software_version);
    }

    /**
     * Generated from protobuf field <code>optional string software_version = 2 [json_name = "softwareVersion"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setSoftwareVersion($var)
    {
        GPBUtil::checkString($var, true);
        $this->software_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.InflatedBasicServiceSet bss_list = 3 [json_name = "bssList"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBssList()
    {
        return $this->bss_list;
    }

    /**
     * Generated from protobuf field <code>repeated .SpaceX.API.Device.InflatedBasicServiceSet bss_list = 3 [json_name = "bssList"];</code>
     *
     * @param  array<\SpaceX\API\Device\InflatedBasicServiceSet>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setBssList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SpaceX\API\Device\InflatedBasicServiceSet::class);
        $this->bss_list = $arr;

        return $this;
    }
}
