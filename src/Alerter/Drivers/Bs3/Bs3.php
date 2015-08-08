<?php

namespace Alerter\Drivers\Bs3;

use Alerter\AlertView;
use Alerter\Drivers\Template;

class Bs3 implements AlertView
{
	public function __construct(Template $template)
	{
		$this->template = $template;
	}

	public function success($message, $title)
	{
		return $this->template->render('Bs3/templates/success.php');
	}

	public function info($message, $title)
	{
		return $this->template->render('Bs3/templates/info.php');
	}

	public function error($message, $title)
	{
		return $this->template->render('Bs3/templates/error.php');
	}
}