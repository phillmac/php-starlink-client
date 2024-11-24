<?php

use SRWieZ\StarlinkClient\Exceptions\Exception;

arch('debug')->preset()->php();

// Exceptions
arch('exceptions')
    ->expect('SRWieZ\StarlinkClient\Exceptions\Exceptions')
    ->toExtend(Exception::class)
    ->ignoring(Exception::class);
