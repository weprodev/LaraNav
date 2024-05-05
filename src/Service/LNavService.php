<?php

declare(strict_types=1);

namespace WeProDev\LaraNav\Service;

use Illuminate\Support\Facades\Config;

class LNavService
{
    public static function getNav(string $navLocation): array
    {
        $nav = Config::get(sprintf('laranav.nav.%s', $navLocation));

        return $nav;
    }
}
