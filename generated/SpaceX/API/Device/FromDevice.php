<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/device.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.FromDevice</code>
 */
class FromDevice extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.Response response = 1 [json_name = "response"];</code>
     */
    protected $response = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.Event event = 2 [json_name = "event"];</code>
     */
    protected $event = null;

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.HealthCheck health_check = 3 [json_name = "healthCheck"];</code>
     */
    protected $health_check = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type \SpaceX\API\Device\Response $response
     * @type \SpaceX\API\Device\Event $event
     * @type \SpaceX\API\Device\HealthCheck $health_check
     *                                      }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.Response response = 1 [json_name = "response"];</code>
     *
     * @return \SpaceX\API\Device\Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    public function hasResponse()
    {
        return isset($this->response);
    }

    public function clearResponse()
    {
        unset($this->response);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.Response response = 1 [json_name = "response"];</code>
     *
     * @param  \SpaceX\API\Device\Response  $var
     * @return $this
     */
    public function setResponse($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\Response::class);
        $this->response = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.Event event = 2 [json_name = "event"];</code>
     *
     * @return \SpaceX\API\Device\Event|null
     */
    public function getEvent()
    {
        return $this->event;
    }

    public function hasEvent()
    {
        return isset($this->event);
    }

    public function clearEvent()
    {
        unset($this->event);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.Event event = 2 [json_name = "event"];</code>
     *
     * @param  \SpaceX\API\Device\Event  $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\Event::class);
        $this->event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.HealthCheck health_check = 3 [json_name = "healthCheck"];</code>
     *
     * @return \SpaceX\API\Device\HealthCheck|null
     */
    public function getHealthCheck()
    {
        return $this->health_check;
    }

    public function hasHealthCheck()
    {
        return isset($this->health_check);
    }

    public function clearHealthCheck()
    {
        unset($this->health_check);
    }

    /**
     * Generated from protobuf field <code>optional .SpaceX.API.Device.HealthCheck health_check = 3 [json_name = "healthCheck"];</code>
     *
     * @param  \SpaceX\API\Device\HealthCheck  $var
     * @return $this
     */
    public function setHealthCheck($var)
    {
        GPBUtil::checkMessage($var, \SpaceX\API\Device\HealthCheck::class);
        $this->health_check = $var;

        return $this;
    }
}
