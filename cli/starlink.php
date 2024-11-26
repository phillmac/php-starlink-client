#!/usr/bin/env php
<?php

error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE);

if (! class_exists('\Composer\InstalledVersions')) {
    require __DIR__.'/../vendor/autoload.php';
}

if (class_exists('\NunoMaduro\Collision\Provider')) {
    (new \NunoMaduro\Collision\Provider)->register();
}

$dishy = new \SRWieZ\StarlinkClient\Dishy;

dump($dishy->getStatus());
// dump($dishy->getObstructionMap());
// $dishy->setSleepModeConfig(
//     start: 120,
//     duration: 2,
// );
// dump($dishy->getStatus());

/*
 * TODO: Some basic function to:
 *  - get the obstruction map
 *  - get the current state of the dish
 *  - reboot, stow, unstow the dish
 *  - set the sleep mode
 *  - get gps location
 */
