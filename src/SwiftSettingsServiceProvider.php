<?php

namespace LaravelDaddy\SwiftSettings;

use Illuminate\Support\ServiceProvider;
use LaravelDaddy\SwiftSettings\App\Services\SettingService;

class SwiftSettingsServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->publishesMigrations([
            __DIR__ . '/database/migrations' => database_path('migrations')
        ], 'migrations');
    }

    public function register()
    {
        $this->app->singleton('swift-settings', function ($app) {
            return new SwiftSettings();
        });

        if (file_exists(__DIR__ . '/helpers.php')) {
            require_once __DIR__ . '/helpers.php';
        }
    }


}
