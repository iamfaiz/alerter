# Laravel Alerter - Easy flash alerts for Laravel 5
## Installation
Pull in the package using Composer.

    composer require iamfaiz/alerter

Then add the service provider in the config/app.php.

```php
'providers' => [
    'Alerter\AlerterServiceProvider'
];
```

And, for convenience, add a facade alias to this same file at the bottom.

```php
'aliases' => [
    'Alert' => 'Alerter\Alert'
];
```

Lastly run the following command.

    php artisan vendor:publish

This will create config/alerter.php file. This file can be used if you don't want to use the default bs3 (Bootstrap 3) driver for your flash alerts.

## Usage

Within your controllers, before you perform a redirect.

```php
public function store()
{
    Alert::success('Successfully added a new task');
    
    return redirect()->back();
}
```

You can use:  

```php
Alert::success($message, $title);
Alert::info($message, $title);
Alert::error($message, $title);
```

And within your master layout file add this.  

```html
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        {{ Alert::render() }}
        @yield('content')
    </body>
</html>
```

If you are using twitter bootstrap the styling would look great by default.That's because in config/alerter.php the driver is set to 'bs3'. Currently 2 drivers comes straight out of the box (bs3, toastr.js) but obviously you can add more.

# Toastr Driver

You can also use toastr alerts. Toastr is a popular javascript plugin. You can read more about it from [here][1] and check out the demo from [here][2].

[1]: https://github.com/CodeSeven/toastr
[2]: http://codeseven.github.io/toastr/demo.html

Before you use this driver make sure that you have jquery and toastr's javascript and css files loaded on your master layout.

```html
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    </head>
    <body>
        {{ Alert::render() }}
        @yield('content')
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </body>
</html>
```