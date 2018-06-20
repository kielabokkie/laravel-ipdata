# Ipdata for Laravel

[![Author](http://img.shields.io/badge/by-@kielabokkie-lightgrey.svg?style=flat-square)](https://twitter.com/kielabokkie)
[![Packagist Version](https://img.shields.io/packagist/v/kielabokkie/laravel-ipdata.svg?style=flat-square)](https://packagist.org/packages/kielabokkie/laravel-ipdata)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

Laravel wrapper for the [kielabokkie/ipdata-php](https://github.com/kielabokkie/ipdata-php) package which retrieves IP address information the using the [ipdata.co](https://ipdata.co) API.

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

## Usage

### Lookup of the calling IP address

```php
use Kielabokkie\LaravelIpdata\Facades\Ipdata;

$res = Ipdata::lookup();
```

### Lookup a specific IP address

```php
use Kielabokkie\LaravelIpdata\Facades\Ipdata;

$res = Ipdata::lookup('1.1.1.1');
```

The Ipdata API will return the following data:

```json
{
  "ip": "1.1.1.1",
  "is_eu": false,
  "city": "Research",
  "region": "Victoria",
  "region_code": "VIC",
  "country_name": "Australia",
  "country_code": "AU",
  "continent_name": "Oceania",
  "continent_code": "OC",
  "latitude": -37.7,
  "longitude": 145.1833,
  "asn": "AS13335",
  "organisation": "Cloudflare Inc",
  "postal": "3095",
  "calling_code": "61",
  "flag": "https://ipdata.co/flags/au.png",
  "emoji_flag": "🇦🇺",
  "emoji_unicode": "U+1F1E6 U+1F1FA",
  "languages": [
    {
      "name": "English",
      "native": "English"
    }
  ],
  "currency": {
    "name": "Australian Dollar",
    "code": "AUD",
    "symbol": "AU$",
    "native": "$",
    "plural": "Australian dollars"
  },
  "time_zone": {
    "name": "Australia/Melbourne",
    "abbr": "AEST",
    "offset": "+1000",
    "is_dst": false,
    "current_time": "2018-06-20T11:41:23.068040+10:00"
  },
  "threat": {
    "is_tor": false,
    "is_proxy": false,
    "is_anonymous": false,
    "is_known_attacker": false,
    "is_known_abuser": false,
    "is_threat": false,
    "is_bogon": false
  }
}
```

This library will run the response through a json_decode giving you an easy object to work with, for example:

```php
echo $res->country_name; // Australia
echo $res->flag; // https://ipdata.co/flags/au.png
```
