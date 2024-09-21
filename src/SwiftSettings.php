<?php

namespace LaravelDaddy\SwiftSettings;

use Illuminate\Support\Facades\Cache;
use LaravelDaddy\SwiftSettings\App\Models\Setting;

class SwiftSettings
{
    public static function setSetting(string $key, string $value)
    {
        try {
            $settings = Setting::updateOrCreate(['key' => $key], ['value' => $value]);
            Cache::forget('swift_settings_'.$key);
            return $settings->value;
        }catch (\Throwable $ex){
            return $ex->getMessage();
        }
    }

    public static function getSetting(string $key, $default = null){
        return Cache::rememberForever('swift_settings_'.$key, function() use ($key, $default){
            $setting = Setting::where('key', $key)->first();
            if($setting){
                return $setting->value;
            }
            return $default;
        });
    }

}
