<?php

namespace Alerter\Drivers;

class TwigTemplate implements Template
{
	public function render($view, $data=[])
	{
		$loader = new Twig_Loader_Filesystem(__DIR__);

		$twig = new Twig_Environment($loader);

		return $twig->render($view, $data);
	}
}