<?php

namespace learn\src;

use Carbon\Carbon;

class CarbonTest
{

    public function handle(string $dateTime): string
    {
        return Carbon::createFromTimeString($dateTime)->toDateString();
    }

}
