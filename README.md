# laravel-sqlite-fluent-drop-foreign

[![Latest Stable Version](https://poser.pugx.org/eXolnet/laravel-sqlite-fluent-drop-foreign/v/stable?format=flat-square)](https://packagist.org/packages/eXolnet/laravel-sqlite-fluent-drop-foreign)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/eXolnet/laravel-sqlite-fluent-drop-foreign/master.svg?style=flat-square)](https://travis-ci.org/eXolnet/laravel-sqlite-fluent-drop-foreign)
[![Total Downloads](https://img.shields.io/packagist/dt/eXolnet/laravel-sqlite-fluent-drop-foreign.svg?style=flat-square)](https://packagist.org/packages/eXolnet/laravel-sqlite-fluent-drop-foreign)

Add a fluent dropForeign when using sqlite database

## Installation

Require this package with composer:

```
composer require exolnet/laravel-sqlite-fluent-drop-foreign
```

If you don't use package auto-discovery, add the service provider to the ``providers`` array in `config/app.php`:

```
Exolnet\SQLiteFluentDropForeign\SQLiteFluentDropForeignServiceProvider::class
```

And the facade to the ``facades`` array in `config/app.php`: 

```
'SQLiteFluentDropForeign' => Exolnet\SQLiteFluentDropForeign\SQLiteFluentDropForeignFacade::class
```

## Usage

Explain how to use your package.

## Testing

To run the phpUnit tests, please use:

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE OF CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email security@exolnet.com instead of using the issue tracker.

## Credits

- [Simon Gaudreau](https://github.com/Gandhi11)
- [All Contributors](../../contributors)

## License

This code is licensed under the [MIT license](http://choosealicense.com/licenses/mit/). 
Please see the [license file](LICENSE) for more information.
