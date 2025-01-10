<?php

namespace SRWieZ\StarlinkClient;

use SpaceX\API\Device\WifiGetClientHistoryRequest;
use SpaceX\API\Device\WifiGetClientsRequest;
use SpaceX\API\Device\WifiGetConfigRequest;
use SRWieZ\StarlinkClient\GrpcClient\GrpcClient;
use SRWieZ\StarlinkClient\Traits\CanReboot;
use SRWieZ\StarlinkClient\Traits\HasHistoryData;

class Wifi extends GrpcClient
{
    use CanReboot;
    use HasHistoryData;

    public function __construct(
        string $host = '192.168.1.1:9000',
        float $timeout = 1.0,
    ) {
        parent::__construct($host, $timeout);
    }

    public function getConfig(): array
    {
        return self::responseToArray(
            $this->handle(new WifiGetConfigRequest, 10)->getWifiGetConfig()
        );
    }

    public function getClients(): array
    {
        return self::responseToArray(
            $this->handle(new WifiGetClientsRequest, 10)->getWifiGetClients()
        );
    }

    public function getClientHistory(
        string $mac_address = '',
        string $client_id = ''
    ): array {
        return self::responseToArray(
            $this->handle(new WifiGetClientHistoryRequest(
                array_filter([
                    'mac_address' => $mac_address,
                    'client_id' => $client_id,
                ])
            ), 10)->getWifiGetClientHistory()
        );
    }

    // public function setDnsRouter()
    // {
    //     $request = new WifiSetConfigRequest();
    //     $config = new WifiConfig();
    //
    //     $request->setWifiConfig($config);
    //
    //     $this->handle($request);
    // }

    // public function setClientName(
    //     string $mac_address,
    //     string $given_name,
    // ) {
    //     $this->handle(new WifiSetClientGivenNameRequest([
    //         'client_name' => new ClientName([
    //             'mac_address' => $mac_address,
    //             'given_name'        => $given_name
    //         ]),
    //     ]), 10);
    // }
}
