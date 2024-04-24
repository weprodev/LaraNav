<?php

declare(strict_types=1);

namespace WeProDev\LaraNav\Provider;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use WeProDev\LaraNav\Facade\LNavService;

final class LaraNavServiceProvider extends ServiceProvider
{
    public static string $LNav_Path;

    public function boot()
    {
        self::$LNav_Path = config('laranav.default.directory', 'LaraNav');

        $this->registerTranslations();
        $this->loadLaraNavDataOnViewPages();

        $publishes = [
            // configuration
            __DIR__.'/../Config/laranav.php' => Config::path('laranav.php'),

            // Resources
            __DIR__.sprintf('./../Resource/layouts') => resource_path(sprintf('views/%s/layouts', self::$LNav_Path)),

        ];
        $this->publishes($publishes);
    }

    private function loadLaraNavDataOnViewPages()
    {
        view()->composer('*', function ($view) {
            View::share([]);
        });
    }

    public function register()
    {
        /*
        |--------------------------------------------------------------------------
        | REPOSITORY BINDING
        |--------------------------------------------------------------------------
        */

        /*
        |--------------------------------------------------------------------------
        | SERVICE BINDING
        |--------------------------------------------------------------------------
        */

        // Facade Pattern
        $this->app->bind('LNav', function () {
            return new LNavService;
        });
    }

    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/laranav');

        if (is_dir($langPath)) {
            $this->loadJsonTranslationsFrom($langPath);

            return;
        }

        $this->loadJsonTranslationsFrom(base_path('/lang'));
    }

    public function provides(): array
    {
        return [];
    }
}
