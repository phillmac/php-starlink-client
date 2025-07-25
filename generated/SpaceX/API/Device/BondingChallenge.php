<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/common.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.BondingChallenge</code>
 */
class BondingChallenge extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string dish_id = 1 [json_name = "dishId"];</code>
     */
    protected $dish_id = null;

    /**
     * Generated from protobuf field <code>optional string wifi_id = 2 [json_name = "wifiId"];</code>
     */
    protected $wifi_id = null;

    /**
     * Generated from protobuf field <code>optional bytes nonce = 3 [json_name = "nonce"];</code>
     */
    protected $nonce = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $dish_id
     * @type string $wifi_id
     * @type string $nonce
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string dish_id = 1 [json_name = "dishId"];</code>
     *
     * @return string
     */
    public function getDishId()
    {
        return isset($this->dish_id) ? $this->dish_id : '';
    }

    public function hasDishId()
    {
        return isset($this->dish_id);
    }

    public function clearDishId()
    {
        unset($this->dish_id);
    }

    /**
     * Generated from protobuf field <code>optional string dish_id = 1 [json_name = "dishId"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setDishId($var)
    {
        GPBUtil::checkString($var, true);
        $this->dish_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string wifi_id = 2 [json_name = "wifiId"];</code>
     *
     * @return string
     */
    public function getWifiId()
    {
        return isset($this->wifi_id) ? $this->wifi_id : '';
    }

    public function hasWifiId()
    {
        return isset($this->wifi_id);
    }

    public function clearWifiId()
    {
        unset($this->wifi_id);
    }

    /**
     * Generated from protobuf field <code>optional string wifi_id = 2 [json_name = "wifiId"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setWifiId($var)
    {
        GPBUtil::checkString($var, true);
        $this->wifi_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes nonce = 3 [json_name = "nonce"];</code>
     *
     * @return string
     */
    public function getNonce()
    {
        return isset($this->nonce) ? $this->nonce : '';
    }

    public function hasNonce()
    {
        return isset($this->nonce);
    }

    public function clearNonce()
    {
        unset($this->nonce);
    }

    /**
     * Generated from protobuf field <code>optional bytes nonce = 3 [json_name = "nonce"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkString($var, false);
        $this->nonce = $var;

        return $this;
    }
}
