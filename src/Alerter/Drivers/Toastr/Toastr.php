<?php

namespace Alerter\Drivers\Toastr;

use Alerter\AlertView;

class Toastr implements AlertView
{
	public function success($message, $title)
	{
		include(__DIR__ . '/templates/success.php');
	}

	public function info($message, $title)
	{
		include(__DIR__ . '/templates/info.php');
	}

	public function error($message, $title)
	{
		include(__DIR__ . '/templates/error.php');
	}
}