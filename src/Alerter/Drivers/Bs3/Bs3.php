<?php

namespace Alerter\Drivers\Bs3;

use Alerter\AlertView;

class Bs3 implements AlertView
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