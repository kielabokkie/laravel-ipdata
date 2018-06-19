# Sentry for Laravel

Laravel wrapper for the [ipdata.co](https://ipdata.co) API.

## Prerequisites

Ipdata has a free plan that allows you to make 1,500 requests per day and paid plans if you need more than that. All plans need an API key and you'll have to register on their [website](https://ipdata.co/pricing.html) to get one.

## Installation

Install the package via composer:

    composer require kielabokkie/laravel-ipdata

If you are on Laravel 5.4 or lower or don't use Laravel's auto discovery, you should add the following to your `config/app.php`:

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

## Config

Add the following to your `config/services.php` file:

```php
// ...
'ipdata' => [
    'api_key' => env('IPDATA_API_KEY'),
],
```

Update your `.env` file and enter the API key you got from Ipdata:

```
IPDATA_API_KEY=youkeyhere
```
