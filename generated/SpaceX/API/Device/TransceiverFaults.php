<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/transceiver.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.TransceiverFaults</code>
 */
class TransceiverFaults extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bool over_temp_modem_asic_fault = 1 [json_name = "overTempModemAsicFault"];</code>
     */
    protected $over_temp_modem_asic_fault = null;

    /**
     * Generated from protobuf field <code>optional bool over_temp_pcba_fault = 2 [json_name = "overTempPcbaFault"];</code>
     */
    protected $over_temp_pcba_fault = null;

    /**
     * Generated from protobuf field <code>optional bool dc_voltage_fault = 3 [json_name = "dcVoltageFault"];</code>
     */
    protected $dc_voltage_fault = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type bool $over_temp_modem_asic_fault
     * @type bool $over_temp_pcba_fault
     * @type bool $dc_voltage_fault
     *            }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Transceiver::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bool over_temp_modem_asic_fault = 1 [json_name = "overTempModemAsicFault"];</code>
     *
     * @return bool
     */
    public function getOverTempModemAsicFault()
    {
        return isset($this->over_temp_modem_asic_fault) ? $this->over_temp_modem_asic_fault : false;
    }

    public function hasOverTempModemAsicFault()
    {
        return isset($this->over_temp_modem_asic_fault);
    }

    public function clearOverTempModemAsicFault()
    {
        unset($this->over_temp_modem_asic_fault);
    }

    /**
     * Generated from protobuf field <code>optional bool over_temp_modem_asic_fault = 1 [json_name = "overTempModemAsicFault"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setOverTempModemAsicFault($var)
    {
        GPBUtil::checkBool($var);
        $this->over_temp_modem_asic_fault = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool over_temp_pcba_fault = 2 [json_name = "overTempPcbaFault"];</code>
     *
     * @return bool
     */
    public function getOverTempPcbaFault()
    {
        return isset($this->over_temp_pcba_fault) ? $this->over_temp_pcba_fault : false;
    }

    public function hasOverTempPcbaFault()
    {
        return isset($this->over_temp_pcba_fault);
    }

    public function clearOverTempPcbaFault()
    {
        unset($this->over_temp_pcba_fault);
    }

    /**
     * Generated from protobuf field <code>optional bool over_temp_pcba_fault = 2 [json_name = "overTempPcbaFault"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setOverTempPcbaFault($var)
    {
        GPBUtil::checkBool($var);
        $this->over_temp_pcba_fault = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool dc_voltage_fault = 3 [json_name = "dcVoltageFault"];</code>
     *
     * @return bool
     */
    public function getDcVoltageFault()
    {
        return isset($this->dc_voltage_fault) ? $this->dc_voltage_fault : false;
    }

    public function hasDcVoltageFault()
    {
        return isset($this->dc_voltage_fault);
    }

    public function clearDcVoltageFault()
    {
        unset($this->dc_voltage_fault);
    }

    /**
     * Generated from protobuf field <code>optional bool dc_voltage_fault = 3 [json_name = "dcVoltageFault"];</code>
     *
     * @param  bool  $var
     * @return $this
     */
    public function setDcVoltageFault($var)
    {
        GPBUtil::checkBool($var);
        $this->dc_voltage_fault = $var;

        return $this;
    }
}
