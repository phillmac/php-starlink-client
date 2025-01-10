<?php

namespace SRWieZ\StarlinkClient\Traits;

use SpaceX\API\Device\RebootRequest;

trait CanReboot
{
    public function reboot(): void
    {
        $this->handle(new RebootRequest);
    }
}
