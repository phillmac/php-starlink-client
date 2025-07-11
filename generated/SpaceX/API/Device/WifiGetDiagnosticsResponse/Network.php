<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/device.proto

namespace SpaceX\API\Device\WifiGetDiagnosticsResponse;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.WifiGetDiagnosticsResponse.Network</code>
 */
class Network extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional string domain = 1 [json_name = "domain"];</code>
     */
    protected $domain = null;

    /**
     * Generated from protobuf field <code>optional string ipv4 = 2 [json_name = "ipv4"];</code>
     */
    protected $ipv4 = null;

    /**
     * Generated from protobuf field <code>repeated string ipv6 = 3 [json_name = "ipv6"];</code>
     */
    private $ipv6;

    /**
     * Generated from protobuf field <code>optional uint32 clients_ethernet = 10 [json_name = "clientsEthernet"];</code>
     */
    protected $clients_ethernet = null;

    /**
     * Generated from protobuf field <code>optional uint32 clients_2ghz = 11 [json_name = "clients2ghz"];</code>
     */
    protected $clients_2ghz = null;

    /**
     * Generated from protobuf field <code>optional uint32 clients_5ghz = 12 [json_name = "clients5ghz"];</code>
     */
    protected $clients_5ghz = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $domain
     * @type string $ipv4
     * @type array<string>|\Google\Protobuf\Internal\RepeatedField $ipv6
     * @type int $clients_ethernet
     * @type int $clients_2ghz
     * @type int $clients_5ghz
     *           }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional string domain = 1 [json_name = "domain"];</code>
     *
     * @return string
     */
    public function getDomain()
    {
        return isset($this->domain) ? $this->domain : '';
    }

    public function hasDomain()
    {
        return isset($this->domain);
    }

    public function clearDomain()
    {
        unset($this->domain);
    }

    /**
     * Generated from protobuf field <code>optional string domain = 1 [json_name = "domain"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, true);
        $this->domain = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string ipv4 = 2 [json_name = "ipv4"];</code>
     *
     * @return string
     */
    public function getIpv4()
    {
        return isset($this->ipv4) ? $this->ipv4 : '';
    }

    public function hasIpv4()
    {
        return isset($this->ipv4);
    }

    public function clearIpv4()
    {
        unset($this->ipv4);
    }

    /**
     * Generated from protobuf field <code>optional string ipv4 = 2 [json_name = "ipv4"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setIpv4($var)
    {
        GPBUtil::checkString($var, true);
        $this->ipv4 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string ipv6 = 3 [json_name = "ipv6"];</code>
     *
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpv6()
    {
        return $this->ipv6;
    }

    /**
     * Generated from protobuf field <code>repeated string ipv6 = 3 [json_name = "ipv6"];</code>
     *
     * @param  array<string>|\Google\Protobuf\Internal\RepeatedField  $var
     * @return $this
     */
    public function setIpv6($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ipv6 = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 clients_ethernet = 10 [json_name = "clientsEthernet"];</code>
     *
     * @return int
     */
    public function getClientsEthernet()
    {
        return isset($this->clients_ethernet) ? $this->clients_ethernet : 0;
    }

    public function hasClientsEthernet()
    {
        return isset($this->clients_ethernet);
    }

    public function clearClientsEthernet()
    {
        unset($this->clients_ethernet);
    }

    /**
     * Generated from protobuf field <code>optional uint32 clients_ethernet = 10 [json_name = "clientsEthernet"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setClientsEthernet($var)
    {
        GPBUtil::checkUint32($var);
        $this->clients_ethernet = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 clients_2ghz = 11 [json_name = "clients2ghz"];</code>
     *
     * @return int
     */
    public function getClients2Ghz()
    {
        return isset($this->clients_2ghz) ? $this->clients_2ghz : 0;
    }

    public function hasClients2Ghz()
    {
        return isset($this->clients_2ghz);
    }

    public function clearClients2Ghz()
    {
        unset($this->clients_2ghz);
    }

    /**
     * Generated from protobuf field <code>optional uint32 clients_2ghz = 11 [json_name = "clients2ghz"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setClients2Ghz($var)
    {
        GPBUtil::checkUint32($var);
        $this->clients_2ghz = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 clients_5ghz = 12 [json_name = "clients5ghz"];</code>
     *
     * @return int
     */
    public function getClients5Ghz()
    {
        return isset($this->clients_5ghz) ? $this->clients_5ghz : 0;
    }

    public function hasClients5Ghz()
    {
        return isset($this->clients_5ghz);
    }

    public function clearClients5Ghz()
    {
        unset($this->clients_5ghz);
    }

    /**
     * Generated from protobuf field <code>optional uint32 clients_5ghz = 12 [json_name = "clients5ghz"];</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setClients5Ghz($var)
    {
        GPBUtil::checkUint32($var);
        $this->clients_5ghz = $var;

        return $this;
    }
}
