## Languages for Laravel

[![Total Downloads](https://poser.pugx.org/pektop/laravel-lang/d/total.svg)](https://packagist.org/packages/pektop/laravel-lang)
[![Latest Stable Version](https://poser.pugx.org/pektop/laravel-lang/v/stable.svg)](https://packagist.org/packages/pektop/laravel-lang)
[![Latest Unstable Version](https://poser.pugx.org/pektop/laravel-lang/v/unstable.svg)](https://packagist.org/packages/pektop/laravel-lang)
[![License](https://poser.pugx.org/pektop/laravel-lang/license.svg)](https://packagist.org/packages/pektop/laravel-lang)

Language strings of [Laravel Framework](https://github.com/laravel/laravel/tree/master/resources/lang/en)

### Compatible with Laravel

* 5.0
* 5.1

### Available languages

* Russian

### Install

Require this package with composer using the following command:

```
composer require pektop/laravel-lang dev-master
```

After updating composer, add the service provider to the `providers` array in `config/app.php`

```
LaravelLang\LaravelLangServiceProvider::class
```

Now you can publish resources

```
php artisan vendor:publish --provider="LaravelLang\LaravelLangServiceProvider"
```

### License

Licensed under the [MIT license](http://opensource.org/licenses/MIT)
