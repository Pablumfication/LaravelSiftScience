# LaravelSiftScience

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

This package provides integration with the Sift Science API. 

The package simply provides a LaravelSiftScience facade that acts as a wrapper to the SiftScience/sift-php package.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require pablumfication/laravel-sift-science
```

## Usage

``` php
use LaravelSiftScience;

LaravelSiftScience::track('$create_account', ['$user_id' => 'username']);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email mark@4each.co.uk instead of using the issue tracker.

## Credits

- [Mark Davidson][https://pablumfication.co.uk]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pablumfication/laravel-sift-science.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pablumfication/laravel-sift-science/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/pablumfication/laravel-sift-science.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/pablumfication/laravel-sift-science.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pablumfication/laravel-sift-science.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pablumfication/laravel-sift-science
[link-travis]: https://travis-ci.org/pablumfication/laravel-sift-science
[link-scrutinizer]: https://scrutinizer-ci.com/g/pablumfication/laravel-sift-science/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/pablumfication/laravel-sift-science
[link-downloads]: https://packagist.org/packages/pablumfication/laravel-sift-science
[link-author]: https://github.com/pablumfication
[link-contributors]: ../../contributors
