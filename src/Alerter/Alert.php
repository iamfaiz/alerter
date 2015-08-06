<?php

namespace Alerter;

use Illuminate\Support\Facades\Facade;

class Alert extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'laravel-alerter';
	}
}