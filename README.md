# Koverae UI Builder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/koverae/koverae-ui-builder.svg?style=flat-square)](https://packagist.org/packages/koverae/koverae-ui-builder)
[![Total Downloads](https://img.shields.io/packagist/dt/koverae/koverae-ui-builder.svg?style=flat-square)](https://packagist.org/packages/koverae/koverae-ui-builder)
![GitHub Actions](https://github.com/koverae/koverae-ui-builder/actions/workflows/main.yml/badge.svg)

Koverae UI Builder is a flexible and intuitive interface builder package designed specifically for Laravel. Built with the power of Koverae’s ecosystem in mind, it allows developers to easily create, customize, and manage UI components like navigation bars, forms, buttons, and more—without the hassle of manual coding.

## Installation

To get started, require the package via Composer:

```bash
composer require koverae/koverae-ui-builder
```

Publish the package's configuration file:
```bash
php artisan vendor:publish --tag=koverae-ui-builder-config
```
## Making Components:

#### Command Signature
```bash
php artisan koverae:make-form <Component>
```
#### Examples
```bash
php artisan koverae:make-form UserForm
```

## Usage

```php
// Usage description here
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email techie@developer.koverae.com instead of using the issue tracker.

## Credits

-   [Arden BOUET](https://github.com/koverae)
-   [All Contributors](../../contributors)

## License

The GNU AGPLv. Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
