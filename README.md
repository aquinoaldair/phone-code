# Codigos o Prefijos de teléfonos de paises

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aquinoaldair/phone-code.svg?style=flat-square)](https://packagist.org/packages/aquinoaldair/phone-code)
[![Build Status](https://travis-ci.org/aquinoaldair/phone-code.svg?branch=master)](https://travis-ci.org/aquinoaldair/phone-code)
[![Total Downloads](https://img.shields.io/packagist/dt/aquinoaldair/phone-code.svg?style=flat-square)](https://packagist.org/packages/aquinoaldair/phone-code)

Laravel 6.x, 7.x

## Installation

You can install the package via composer:

```bash
composer require aquinoaldair/phone-code
```

## Usage

Properties:

nombre, name, phone_code, iso2, iso3

``` php

use Aquinoaldair\PhoneCode\PhoneCode;


//PRINCIPAL FUNCTIONS


$phonecode = new PhoneCode();

$phonecode->make("2281694545")->fromName('Mexico'); // return "522281694545"
$phonecode->makeFull("2281694545")->fromName('Mexico'); // return "+522281694545"

$phonecode->make("2281694545")->fromIso2('MX'); // return "522281694545"
$phonecode->makeFull("2281694545")->fromIso2('MX'); // return "+522281694545" 

$phonecode->make("2281694545")->fromIso3('MEX'); // return "522281694545"
$phonecode->makeFull("2281694545")->fromIso3('mex'); // return "+522281694545" 

$phonecode->getAll(); // return all data as collection

//MORE FUNCTIONS

$items = PhoneCode::get(); // return a collection

$item  = $items->first();

$item->phone_code; // "93
$item->nombre; // "Afganistán"
$item->name; // "Afghanistan"
$item->iso2; // "AF"
$item->iso3; // "AFG" 


$items->firstWhere('name', "Peru");

/*
{
  "nombre": "Perú"
  "name": "Peru"
  "nom": "Pérou"
  "iso2": "PE"
  "iso3": "PER"
  "phone_code": "51"
}
*/

- You can implement any functionality of the laravel collections.
- See https://laravel.com/docs/7.x/collections


```

## Configuration

```
php artisan vendor:publish --tag=config
```
This will publish all the configuration options to: config/phone-code.php. You can add new values.



### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email aquinoaldair@hotmail.com instead of using the issue tracker.

## Credits

- [Aldair](https://github.com/aquinoaldair)
- aquinoaldair@hotmail.com

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
