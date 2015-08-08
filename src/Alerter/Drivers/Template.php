<?php

namespace Alerter\Drivers;

interface Template
{
	public function render($view, $data=[]);
}