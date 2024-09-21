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
        ], 'laravel-assets');
    }

}
