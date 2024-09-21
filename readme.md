# Swift Settings Package
<small>Crafted with ♥️ by Laravel Daddy</small>

## Installation

To install the package, run the following command:

```bash
composer require laravel-daddy/swift-settings
```

Upon installation, the package will automatically publish the necessary migrations and register the **SwiftSettingsServiceProvider**.

## Usage

All settings are automatically cached to enhance the performance of your application. This ensures that accessing settings is efficient and optimized.

You can manage settings using either the facade or the helper method.

### Using the Facade

```php
use LaravelDaddy\SwiftSettings\Facade\SwiftSettingsFacade;

// Retrieve a setting by its key, with a default value if the key doesn't exist
SwiftSettingsFacade::getSetting('key', 'default_value');

// Set a new value for a specific key
SwiftSettingsFacade::setSetting('key', 'value');
```

### Using the Helper Method

```php
// Retrieve a setting by its key, with a default value if the key doesn't exist
swift_settings()->getSetting('key', 'default_value');

// Set a new value for a specific key
swift_settings()->setSetting('key', 'value');
```

Both approaches allow you to retrieve or update settings efficiently, with all keys being cached for improved performance.
