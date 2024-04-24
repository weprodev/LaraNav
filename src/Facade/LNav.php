<?php

declare(strict_types=1);

namespace WeProDev\LaraNav\Facade;

use Illuminate\Support\Facades\Facade;

final class LNav extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'LNav';
    }
}
