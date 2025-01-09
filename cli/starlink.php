#!/usr/bin/env php
<?php

use SRWieZ\StarlinkClient\Dishy;
use SRWieZ\StarlinkClient\ObstructionMapGenerator;

error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);

if (! class_exists('\Composer\InstalledVersions')) {
    require __DIR__.'/../vendor/autoload.php';
}

if (class_exists('\NunoMaduro\Collision\Provider')) {
    (new \NunoMaduro\Collision\Provider)->register();
}

$dishy = new Dishy('192.168.1.1:9000');

// $dishy->stow();
//
// sleep(10);
//
// $dishy->unstow();

// $history = $dishy->getStatsHistory();

// foreach ($history as $key => $value) {
//     echo $key.': '.(is_array($value) ? count($value) : $value).PHP_EOL;
// }

// dump($history['outages']);

// dd($dishy->setClientName(
//     mac_address: '74:24:9f:77:eb:88',
//     given_name: 'MacBookPro Corentin',
// ));
dump($dishy->getWifiClients());
// dd($dishy->getWifiGetClientHistory(
//         mac_address: '74:24:9f:77:eb:88',
// ));
// dd($dishy->getWifiGetClientHistory(
//         client_id: '1172153257',
// ));
// dump($dishy->getAlerts());
// dump($dishy->getObstructionMap());
// $dishy->setSleepModeConfig(
//     start: 120,
//     duration: 2,
// );
// dump($dishy->getStatus());

// when there is a wifi
//   "connectedRouters" => array:1 [
//     0 => "Router-010000000000000000E7EB88"
//   ]

// $obsMap = $dishy->getObstructionMap();
//
// (new ObstructionMapGenerator($obsMap))
//     ->transparent()
//     ->generate()
//     ->asFile('assets/obstruction_map.png');
//
// (new ObstructionMapGenerator($obsMap))
//     ->transparent(false)
//     ->grayscale()
//     ->opacity(0.95)
//     ->generate()
//     ->asFile('assets/obstruction_map_grayscale.png');

/*
 * TODO: Some basic function to:
 *  - get the obstruction map
 *  - get the current state of the dish
 *  - reboot, stow, unstow the dish
 *  - set the sleep mode
 *  - get gps location
 *  - update the dish (send reboot if update is pending)
 */
