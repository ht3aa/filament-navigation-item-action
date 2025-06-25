# This package will add the ability to add actions to each navigation item in the sidebar of filament panel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ht3aa/filament-navigation-item-action.svg?style=flat-square)](https://packagist.org/packages/ht3aa/filament-navigation-item-action)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ht3aa/filament-navigation-item-action/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ht3aa/filament-navigation-item-action/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ht3aa/filament-navigation-item-action/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ht3aa/filament-navigation-item-action/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ht3aa/filament-navigation-item-action.svg?style=flat-square)](https://packagist.org/packages/ht3aa/filament-navigation-item-action)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/filament-navigation-item-action.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/filament-navigation-item-action)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require ht3aa/filament-navigation-item-action
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-navigation-item-action-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-navigation-item-action-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-navigation-item-action-views"
```

## Usage

```php
$filamentNavigationItemAction = new Ht3aa\FilamentNavigationItemAction();
echo $filamentNavigationItemAction->echoPhrase('Hello, Ht3aa!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ht3aa](https://github.com/ht3aa)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
