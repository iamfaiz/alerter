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
		return $this->engine->render('Drivers/Bs3/templates/success', [
			'message' => $message,
			'title' => $title
		]);
	}

	public function info($message, $title)
	{
		return $this->engine->render('Drivers/Bs3/templates/info', [
			'message' => $message,
			'title' => $title
		]);
	}

	public function error($message, $title)
	{
		return $this->engine->render('Drivers/Bs3/templates/error', [
			'message' => $message,
			'title' => $title
		]);
	}
}