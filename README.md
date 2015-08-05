## Languages for Laravel

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
