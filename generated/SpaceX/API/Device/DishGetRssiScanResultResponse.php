<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/dish.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.DishGetRssiScanResultResponse</code>
 */
class DishGetRssiScanResultResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetRssiScanResult result = 1 [json_name = "result"];</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \SpaceX\API\Device\DishGetRssiScanResult $result
     *                                                }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Dish::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetRssiScanResult result = 1 [json_name = "result"];</code>
     *
     * @return \SpaceX\API\Device\DishGetRssiScanResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.DishGetRssiScanResult result = 1 [json_name = "result"];</code>
     *
     * @param  \SpaceX\API\Device\DishGetRssiScanResult  $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\DishGetRssiScanResult::class);
        $this->result = $var;

        return $this;
    }
}
