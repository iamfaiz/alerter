<?php

namespace Alerter\Drivers\Bs3;

use Alerter\AlertView;
use League\Plates\Engine;

class Bs3 implements AlertView
{
	protected $engine;

	public function __construct(Engine $engine)
	{
		$this->engine = $engine;
	}

	public function success($message, $title)
	{
		return $this->engine->render(__DIR__ . '/templates/success.php');
	}

	public function info($message, $title)
	{
		return $this->engine->render(__DIR__ . '/templates/info.php');
	}

	public function error($message, $title)
	{
		return $this->engine->render(__DIR__ . '/templates/error.php');
	}
}