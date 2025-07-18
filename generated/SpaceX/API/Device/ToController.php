<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/wifi.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.ToController</code>
 */
class ToController extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional int32 api_version = 4 [json_name = "apiVersion"];</code>
     */
    protected $api_version = null;

    /**
     * Generated from protobuf field <code>optional int32 api_version_other_side = 7 [json_name = "apiVersionOtherSide"];</code>
     */
    protected $api_version_other_side = null;

    /**
     * Generated from protobuf field <code>optional bool ready_for_multiple_networks = 6 [json_name = "readyForMultipleNetworks"];</code>
     */
    protected $ready_for_multiple_networks = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiClients clients = 1 [json_name = "clients"];</code>
     */
    protected $clients = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiMeshJoin mesh_join = 2 [json_name = "meshJoin"];</code>
     */
    protected $mesh_join = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiMeshStatus status = 3 [json_name = "status"];</code>
     */
    protected $status = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.MeshSpeedtest speedtest = 5 [json_name = "speedtest"];</code>
     */
    protected $speedtest = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int $api_version
     * @type int $api_version_other_side
     * @type bool $ready_for_multiple_networks
     * @type \SpaceX\API\Device\WifiClients $clients
     * @type \SpaceX\API\Device\WifiMeshJoin $mesh_join
     * @type \SpaceX\API\Device\WifiMeshStatus $status
     * @type \SpaceX\API\Device\MeshSpeedtest $speedtest
     *                                        }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Wifi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional int32 api_version = 4 [json_name = "apiVersion"];</code>
     *
     * @return int
     */
    public function getApiVersion()
    {
        return isset($this->api_version) ? $this->api_version : 0;
    }

    public function hasApiVersion()
    {
        return isset($this->api_version);
    }

    public function clearApiVersion()
    {
        unset($this->api_version);
    }

    /**
     * Generated from protobuf field <code>optional int32 api_version = 4 [json_name = "apiVersion"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->api_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int32 api_version_other_side = 7 [json_name = "apiVersionOtherSide"];</code>
     *
     * @return int
     */
    public function getApiVersionOtherSide()
    {
        return isset($this->api_version_other_side) ? $this->api_version_other_side : 0;
    }

    public function hasApiVersionOtherSide()
    {
        return isset($this->api_version_other_side);
    }

    public function clearApiVersionOtherSide()
    {
        unset($this->api_version_other_side);
    }

    /**
     * Generated from protobuf field <code>optional int32 api_version_other_side = 7 [json_name = "apiVersionOtherSide"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setApiVersionOtherSide($var)
    {
        GPBUtil::checkInt32($var);
        $this->api_version_other_side = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool ready_for_multiple_networks = 6 [json_name = "readyForMultipleNetworks"];</code>
     *
     * @return bool
     */
    public function getReadyForMultipleNetworks()
    {
        return isset($this->ready_for_multiple_networks) ? $this->ready_for_multiple_networks : false;
    }

    public function hasReadyForMultipleNetworks()
    {
        return isset($this->ready_for_multiple_networks);
    }

    public function clearReadyForMultipleNetworks()
    {
        unset($this->ready_for_multiple_networks);
    }

    /**
     * Generated from protobuf field <code>optional bool ready_for_multiple_networks = 6 [json_name = "readyForMultipleNetworks"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setReadyForMultipleNetworks($var)
    {
        GPBUtil::checkBool($var);
        $this->ready_for_multiple_networks = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiClients clients = 1 [json_name = "clients"];</code>
     *
     * @return \SpaceX\API\Device\WifiClients|null
     */
    public function getClients()
    {
        return $this->clients;
    }

    public function hasClients()
    {
        return isset($this->clients);
    }

    public function clearClients()
    {
        unset($this->clients);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiClients clients = 1 [json_name = "clients"];</code>
     *
     * @param  \SpaceX\API\Device\WifiClients  $var
     * @return $this
     */
    public function setClients($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiClients::class);
        $this->clients = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiMeshJoin mesh_join = 2 [json_name = "meshJoin"];</code>
     *
     * @return \SpaceX\API\Device\WifiMeshJoin|null
     */
    public function getMeshJoin()
    {
        return $this->mesh_join;
    }

    public function hasMeshJoin()
    {
        return isset($this->mesh_join);
    }

    public function clearMeshJoin()
    {
        unset($this->mesh_join);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiMeshJoin mesh_join = 2 [json_name = "meshJoin"];</code>
     *
     * @param  \SpaceX\API\Device\WifiMeshJoin  $var
     * @return $this
     */
    public function setMeshJoin($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiMeshJoin::class);
        $this->mesh_join = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiMeshStatus status = 3 [json_name = "status"];</code>
     *
     * @return \SpaceX\API\Device\WifiMeshStatus|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.WifiMeshStatus status = 3 [json_name = "status"];</code>
     *
     * @param  \SpaceX\API\Device\WifiMeshStatus  $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\WifiMeshStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.MeshSpeedtest speedtest = 5 [json_name = "speedtest"];</code>
     *
     * @return \SpaceX\API\Device\MeshSpeedtest|null
     */
    public function getSpeedtest()
    {
        return $this->speedtest;
    }

    public function hasSpeedtest()
    {
        return isset($this->speedtest);
    }

    public function clearSpeedtest()
    {
        unset($this->speedtest);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.MeshSpeedtest speedtest = 5 [json_name = "speedtest"];</code>
     *
     * @param  \SpaceX\API\Device\MeshSpeedtest  $var
     * @return $this
     */
    public function setSpeedtest($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\MeshSpeedtest::class);
        $this->speedtest = $var;

        return $this;
    }
}
