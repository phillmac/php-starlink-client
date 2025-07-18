<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/wifi.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiTogglePoeNegotiationRequest</code>
 */
class WifiTogglePoeNegotiationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bool enable = 1 [json_name = "enable"];</code>
     */
    protected $enable = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type bool $enable
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Wifi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bool enable = 1 [json_name = "enable"];</code>
     *
     * @return bool
     */
    public function getEnable()
    {
        return isset($this->enable) ? $this->enable : false;
    }

    public function hasEnable()
    {
        return isset($this->enable);
    }

    public function clearEnable()
    {
        unset($this->enable);
    }

    /**
     * Generated from protobuf field <code>optional bool enable = 1 [json_name = "enable"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setEnable($var)
    {
        GPBUtil::checkBool($var);
        $this->enable = $var;

        return $this;
    }
}
