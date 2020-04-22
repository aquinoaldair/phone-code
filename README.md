# Codigos o Prefijos de teléfonos de paises

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aquinoaldair/phone-code.svg?style=flat-square)](https://packagist.org/packages/aquinoaldair/phone-code)
[![Build Status](https://img.shields.io/travis/aquinoaldair/phone-code/master.svg?style=flat-square)](https://travis-ci.org/aquinoaldair/phone-code)
[![Quality Score](https://img.shields.io/scrutinizer/g/aquinoaldair/phone-code.svg?style=flat-square)](https://scrutinizer-ci.com/g/aquinoaldair/phone-code)
[![Total Downloads](https://img.shields.io/packagist/dt/aquinoaldair/phone-code.svg?style=flat-square)](https://packagist.org/packages/aquinoaldair/phone-code)

Códigos de teléfonos o marcación por país para Laravel

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

$items = PhoneCode::get(); // RETURN A COLLECTION

// PROPERTIES

foreach($items as $item){
    $item->phone_code; // "93
    $item->nombre; // "Afganistán"
    $item->name; // "Afghanistan"
    $item->iso2; // "AF"
    $item->iso3; // "AFG" 
}

$items->first()->phone_code; // "93"


```

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
