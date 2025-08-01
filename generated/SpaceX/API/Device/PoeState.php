<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/wifi_util.proto

namespace SpaceX\API\Device;

use UnexpectedValueException;

/**
 * Protobuf type <code>SpaceX.API.Device.PoeState</code>
 */
class PoeState
{
    /**
     * Generated from protobuf enum <code>POE_STATE_DISABLED = 0;</code>
     */
    const POE_STATE_DISABLED = 0;

    /**
     * Generated from protobuf enum <code>POE_STATE_NEGOTIATING = 1;</code>
     */
    const POE_STATE_NEGOTIATING = 1;

    /**
     * Generated from protobuf enum <code>POE_STATE_ON_RAMPUP = 2;</code>
     */
    const POE_STATE_ON_RAMPUP = 2;

    /**
     * Generated from protobuf enum <code>POE_STATE_ON = 3;</code>
     */
    const POE_STATE_ON = 3;

    /**
     * Generated from protobuf enum <code>POE_STATE_WATER_DETECT_RAMPUP = 4;</code>
     */
    const POE_STATE_WATER_DETECT_RAMPUP = 4;

    /**
     * Generated from protobuf enum <code>POE_STATE_WATER_DETECT = 5;</code>
     */
    const POE_STATE_WATER_DETECT = 5;

    private static $valueToName = [
        self::POE_STATE_DISABLED => 'POE_STATE_DISABLED',
        self::POE_STATE_NEGOTIATING => 'POE_STATE_NEGOTIATING',
        self::POE_STATE_ON_RAMPUP => 'POE_STATE_ON_RAMPUP',
        self::POE_STATE_ON => 'POE_STATE_ON',
        self::POE_STATE_WATER_DETECT_RAMPUP => 'POE_STATE_WATER_DETECT_RAMPUP',
        self::POE_STATE_WATER_DETECT => 'POE_STATE_WATER_DETECT',
    ];

    public static function name($value)
    {
        if (! isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no name defined for value %s', __CLASS__, $value));
        }

        return self::$valueToName[$value];
    }

    public static function value($name)
    {
        $const = __CLASS__.'::'.strtoupper($name);
        if (! defined($const)) {
            throw new UnexpectedValueException(sprintf(
                'Enum %s has no value defined for name %s', __CLASS__, $name));
        }

        return constant($const);
    }
}
