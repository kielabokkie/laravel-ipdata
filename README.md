# Sentry for Laravel

Laravel wrapper for the [ipdata.co](https://ipdata.co) API.

## Installation

You can install the package via composer:

    composer require kielabokkie/laravel-ipdata

If you are on Laravel 5.4 or lower, you should add the following to your `config/app.php`:

```php
'providers' => [
    // ...
    Kielabokkie\LaravelIpdata\IpdataServiceProvider::class,
]

'aliases' => [
    // ...
    'Ipdata' => Kielabokkie\LaravelIpdata\Facades\Ipdata::class,
)
```
