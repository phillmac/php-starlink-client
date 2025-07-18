<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// NO CHECKED-IN PROTOBUF GENCODE
// source: spacex_api/device/common.proto

namespace SpaceX\API\Device;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SpaceX.API.Device.ChallengeResponse</code>
 */
class ChallengeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bytes signature = 1 [json_name = "signature"];</code>
     */
    protected $signature = null;

    /**
     * Generated from protobuf field <code>optional bytes certificate_chain = 2 [json_name = "certificateChain"];</code>
     */
    protected $certificate_chain = null;

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type string $signature
     * @type string $certificate_chain
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\SpacexApi\Device\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bytes signature = 1 [json_name = "signature"];</code>
     *
     * @return string
     */
    public function getSignature()
    {
        return isset($this->signature) ? $this->signature : '';
    }

    public function hasSignature()
    {
        return isset($this->signature);
    }

    public function clearSignature()
    {
        unset($this->signature);
    }

    /**
     * Generated from protobuf field <code>optional bytes signature = 1 [json_name = "signature"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, false);
        $this->signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bytes certificate_chain = 2 [json_name = "certificateChain"];</code>
     *
     * @return string
     */
    public function getCertificateChain()
    {
        return isset($this->certificate_chain) ? $this->certificate_chain : '';
    }

    public function hasCertificateChain()
    {
        return isset($this->certificate_chain);
    }

    public function clearCertificateChain()
    {
        unset($this->certificate_chain);
    }

    /**
     * Generated from protobuf field <code>optional bytes certificate_chain = 2 [json_name = "certificateChain"];</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setCertificateChain($var)
    {
        GPBUtil::checkString($var, false);
        $this->certificate_chain = $var;

        return $this;
    }
}
