<?php

namespace Alerter;

use Alerter\Alerter;
use Alerter\Drivers\Bs3;
use Alerter\Drivers\Template;
use Alerter\Drivers\TwigTemplate;
use Alerter\Flashable;
use Alerter\LaravelFlashable;
use Illuminate\Support\ServiceProvider;

class AlerterServiceProvider extends ServiceProvider
{
	public function boot()
	{
	    $this->publishes([
	        __DIR__ . '/config.php' => config_path('alerter.php'),
	    ]);
	}

	public function register()
	{
		// Register the Template interface used by the drivers.
		$this->registerTemplate();
		// Get all the drivers from the configuration file.
		$allDrivers = $this->app['config']['alerter.all'];
		// Get the selected driver.
		$driver = $this->app['config']['alerter.driver'];
		// Bind the selected driver to the AlertView Interface.
		$this->app->bind('Alerter\AlertView', $allDrivers[$driver]);
		// Binding the flashable interface to the laravel's session.
		$this->app->bind('Alerter\Flashable', LaravelFlashable::class);
		// Binding the Alert Facade to the Alerter class.
		$this->app->bind('laravel-alerter', Alerter::class);
	}

	protected function registerTemplate()
	{
		$this->app->bind(Template::class, TwigTemplate::class);
	}
}