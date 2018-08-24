# laravel-backblaze-b2

[![Author](http://img.shields.io/badge/author-@mhetreramesh-blue.svg?style=flat-square)](https://twitter.com/mhetreramesh)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/gliterd/laravel-backblaze-b2.svg?style=flat-square)](https://packagist.org/packages/gliterd/laravel-backblaze-b2)
[![Software License][ico-license]](LICENSE.md)
[![Build Status](https://img.shields.io/travis/gliterd/laravel-backblaze-b2/master.svg?style=flat-square)](https://travis-ci.org/gliterd/laravel-backblaze-b2)
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads](https://img.shields.io/packagist/dt/gliterd/laravel-backblaze-b2.svg?style=flat-square)](https://packagist.org/packages/gliterd/laravel-backblaze-b2)

Visit (https://secure.backblaze.com/b2_buckets.htm) and get your account id, application key.

The Laravel Backblaze B2 Storage Service Provider give provision for for laravel storage to use blackblaze as their storage system. It uses the [Backblaze B2 SDK](https://github.com/gliterd/backblaze-b2) & [Flysystem Adapter](https://github.com/gliterd/flysystem-backblaze) to communicate with the Backblaze b2 API.

## Install

Via Composer

``` bash
composer require gliterd/laravel-backblaze-b2
```
In your app.php config file add to the list of service providers:

``` php
\Gliterd\BackblazeB2\BackblazeB2ServiceProvider::class,
```
Add the following to your filesystems.php config file in the disks section:
``` php
'b2' => [
    'driver'         => 'b2',
    'accountId'      => '',
    'applicationKey' => '',
    'bucketName'     => '',
],
```
## *ApplicationKey is not supported yet, please use MasterKey only*

## Usage

Just use it as you normally would use the Storage facade.

``` php
\Storage::disk('b2')->put('filename.txt', 'My important content');
```
and
``` php
\Storage::disk('b2')->get('filename.txt')
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email mhetreramesh@gmail.com instead of using the issue tracker.

## Credits

- [Ramesh Mhetre][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/gliterd/laravel-backblaze-b2.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/gliterd/laravel-backblaze-b2/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/gliterd/laravel-backblaze-b2.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/gliterd/laravel-backblaze-b2.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/gliterd/laravel-backblaze-b2.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/gliterd/laravel-backblaze-b2
[link-travis]: https://travis-ci.org/gliterd/laravel-backblaze-b2
[link-scrutinizer]: https://scrutinizer-ci.com/g/gliterd/laravel-backblaze-b2/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/gliterd/laravel-backblaze-b2
[link-downloads]: https://packagist.org/packages/gliterd/laravel-backblaze-b2
[link-author]: https://github.com/mhetreramesh
[link-contributors]: ../../contributors
