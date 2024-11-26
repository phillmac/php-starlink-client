<?php

use SRWieZ\StarlinkClient\Dishy;

it('returns the correct key', function ($class, $expected) {
    expect(Dishy::getRequestKey(new $class))
        ->toBe($expected);
})->with([
    [\SpaceX\API\Device\GetStatusRequest::class, 'get_status'],
    [\SpaceX\API\Device\GetLocationRequest::class, 'get_location'],
    [\SpaceX\API\Device\GetHistoryRequest::class, 'get_history'],
    [\SpaceX\API\Device\RebootRequest::class, 'reboot'],
    [\SpaceX\API\Device\DishStowRequest::class, 'dish_stow'],
    [\SpaceX\API\Device\DishPowerSaveRequest::class, 'dish_power_save'],
    [\SpaceX\API\Device\DishGetObstructionMapRequest::class, 'dish_get_obstruction_map'],
    [\SpaceX\API\Device\DishClearObstructionMapRequest::class, 'dish_clear_obstruction_map'],
]);
