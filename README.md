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

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

```bash
composer require koverae/koverae-ui-builder --provider"Koverae\KoveraeUiBuilder\KoveraeUiBuilderServiceProvider"
```


Publish the package's configuration file:
```bash
php artisan vendor:publish --tag=koverae-ui-builder-config
```
## Macking Components:
### Command Signature
```bash
php artisan koverae:make-form <Component>
php artisan koverae:make-table <Component>
php artisan koverae:make-cart <Component>
```
### Examples
```bash
php artisan koverae:make-form UserForm
php artisan koverae:make-table UserTable
php artisan koverae:make-cart UserCart
```
### Output
```bash
COMPONENT CREATED  🤙🏿

CLASS: App/Livewire/Form/UserForm
TAG: <livewire:form.user-form />

CLASS: App/Livewire/Table/UserTable
TAG: <livewire:table.user-table />

CLASS: App/Livewire/Cart/UserCart
TAG: <livewire:cart.user-cart />
```

## Making Components (Nwidart Module):
To make a component inside a [Laravel Module](https://github.com/nWidart/laravel-modules) User 
#### Command Signature
Currently the package only supports the following types of components: Form, Table and Cart.
```bash
php artisan koverae:module-component <Component> --type=form <Module>
php artisan koverae:module-component <Component> --type=table <Module>
php artisan koverae:module-component <Component> --type=cart <Module>
```

#### Examples
```bash
php artisan koverae:module-component UserForm --type=form User
php artisan koverae:module-component UserTable --type=table User
php artisan koverae:module-component UserCart --type=table User
```

#### Output
```bash
MODULE COMPONENT CREATED  🤙🏿

CLASS: Modules/User/Livewire/Form/UserForm
TAG: <livewire:user::form.user-form />

CLASS: Modules/User/Livewire/Table/UserTable
TAG: <livewire:user::table.user-table />

CLASS: Modules/User/Livewire/Cart/UserCart
TAG: <livewire:user::cart.user-cart />
```

## Usage
To use a component, simply place its tag wherever you want it to appear:
```html
<!-- Component (Form) -->
<livewire:form.user-form />

<!--  Module Component (Form) -->
<livewire:user::form.user-form />

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

Please review [our security policy](https://github.com/Koverae/koverae-ui-builder/security) on how to report security vulnerabilities.

## Credits

-   [Arden BOUET](https://github.com/arden28)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

