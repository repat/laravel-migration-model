# laravel-migration-model
[![Latest Version on Packagist](https://img.shields.io/packagist/v/repat/laravel-migration-model.svg?style=flat-square)](https://packagist.org/packages/repat/laravel-migration-model)
[![Total Downloads](https://img.shields.io/packagist/dt/repat/laravel-migration-model.svg?style=flat-square)](https://packagist.org/packages/repat/laravel-migration-model)

**laravel-migration-model** contains one Eloquent model for the `migrations` table.

## Installation
`$ composer require repat/laravel-migration-model`

## Documentation

#### Attributes/Methods

```php
$migration = \Repat\Laravel\Migration::first();

// Attributes from table
$migration->id;
$migration->migration;
$migration->batch;

// Mutator attributes
$migration->filename;

// Methods
$migration->fileExists();

// list all files from migrations folder
$migrations = Migration::listFiles();

// list all files from migrations folder as migration name (without '.php')
$migrations = Migration::listFiles(true);
```

## License
* MIT, see [LICENSE](https://github.com/repat/laravel-migration-model/blob/master/LICENSE)

## Version
* Version 0.4

## Contact
#### repat
* Homepage: https://repat.de
* e-mail: repat@repat.de
* Twitter: [@repat123](https://twitter.com/repat123 "repat123 on twitter")

[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=repat&url=https://github.com/repat/laravel-migration-model&title=laravel-migration-model&language=&tags=github&category=software)
