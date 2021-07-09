# Default Model Sorting

[![Latest Version on Packagist](https://img.shields.io/packagist/v/stephenjude/default-model-sorting.svg?style=flat-square)](https://packagist.org/packages/stephenjude/default-model-sorting)
[![Build Status](https://img.shields.io/travis/stephenjude/default-model-sorting/master.svg?style=flat-square)](https://travis-ci.org/stephenjude/default-model-sorting)
[![Total Downloads](https://img.shields.io/packagist/dt/stephenjude/default-model-sorting.svg?style=flat-square)](https://packagist.org/packages/stephenjude/default-model-sorting)

Add default sorting column to your eloquent model.


## Installation

You can install the package via composer:

```bash
composer require stephenjude/default-model-sorting
```

## Basic Usage

``` php
use Stephenjude\DefaultModelSorting\Traits\DefaultOrderBy;

class Article extends Model
{
    use DefaultOrderBy;

    protected static $orderByColumn = 'title';
}
```

### Column Sorting Order
You can change the default column sorting order by adding the `$orderByColumnDirection` property inside your eloquent model.
```php
use Stephenjude\DefaultModelSorting\Traits\DefaultOrderBy;

class Article extends Model
{
    use DefaultOrderBy;

    protected static $orderByColumn = 'title';

    protected static $orderByColumnDirection = 'desc';
}
```

## Configurations

### Publishing Config
You can publish the config file by running the `vendor:publish command`

```
php artisan vendor:publish --provider="Stephenjude\DefaultModelSorting\DefaultModelSortingServiceProvider" --tag="config"
```
### Configuring Default Column Sorting Order
You can change the default sorting order inside the config file: 
```
'order_by' => 'asc',
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

If you discover any security related issues, please email hello@stephenjude.me instead of using the issue tracker.

## Credits

- [Stephen Jude](https://github.com/stephenjude)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
