<?php

declare(strict_types=1);

namespace WeProDev\LaraNav;

use Illuminate\Support\ServiceProvider;
use WeProDev\LaraNav\Provider\LaraNavServiceProvider;

final class LaraPanelProvider extends ServiceProvider
{
    public function boot(): void
    {
    }

    public function register(): void
    {
        $this->app->register(LaraNavServiceProvider::class);
    }
}
