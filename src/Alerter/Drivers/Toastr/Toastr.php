<?php

namespace Alerter\Drivers\Toastr;

use Alerter\AlertView;
use League\Plates\Engine;

class Toastr implements AlertView
{
	public function __construct(Engine $engine)
	{
		$this->engine = $engine;
	}

	public function success($message, $title)
	{
		return $this->engine->render('Drivers/Toastr/templates/success', [
			'message' => $message,
			'title' => $title
		]);
	}

	public function info($message, $title)
	{
		return $this->engine->render('Drivers/Toastr/templates/info', [
			'message' => $message,
			'title' => $title
		]);
	}

	public function error($message, $title)
	{
		return $this->engine->render('Drivers/Toastr/templates/error', [
			'message' => $message,
			'title' => $title
		]);
	}
}