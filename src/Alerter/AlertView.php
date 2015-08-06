<?php

namespace Alerter;

interface AlertView
{
	public function success($message, $title);

	public function info($message, $title);

	public function error($message, $title);
}