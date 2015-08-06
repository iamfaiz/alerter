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

And, for convenience, add a facade alias to this same file at the bottom:

```php
'aliases' => [
    'Alert' => 'Alerter\Alert'
];
```

Lastly run the following command:  

    php artisan vendor:publish

This will create config/alerter.php file. This file can be used if you don't want to use the default bs3 (Bootstrap 3) driver for your flash alerts.

## Usage

Within your controllers, before you perform a redirect...

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

And within your master layout file add this:  

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