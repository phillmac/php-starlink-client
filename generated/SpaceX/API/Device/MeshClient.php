<?php

// GENERATED CODE -- DO NOT EDIT!

namespace SpaceX\API\Device;

class MeshClient extends \Grpc\BaseStub
{
    /**
     * @param  string  $hostname  hostname
     * @param  array  $opts  channel options
     * @param  \Grpc\Channel  $channel  (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param  array  $metadata  metadata
     * @param  array  $options  call options
     * @return \Grpc\BidiStreamingCall
     */
    public function MeshStream($metadata = [], $options = [])
    {
        return $this->_bidiRequest('/SpaceX.API.Device.Mesh/MeshStream',
            ['\SpaceX\API\Device\FromController', 'decode'],
            $metadata, $options);
    }
}
