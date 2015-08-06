<?php

namespace Alerter;

use Alerter\AlertView;
use Illuminate\Support\Facades\App;

class Alerter
{
	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var string
	 */
	protected $message;

	/**
	 * @var string
	 */
	protected $type;

	/**
	 * @var Flashable
	 */
	protected $session;

	/**
	 * Create the Alerter instance.
	 *
	 * @param Flashable $session
	 */
	public function __construct(Flashable $session, AlertView $driver)
	{
		$this->session = $session;

		$this->driver = $driver;
	}

	// public function initDriver()
	// {
	// 	$allDrivers = config('alerter.all');

	// 	$this->driver = App::make(
	// 		$allDrivers[config('alerter.driver')]
	// 	);

	// 	if ( ! $this->driver instanceof AlertView)
	// 		throw new \Exception('The driver specified for the alerter must implement the "Alerter\AlertView" interface.');
	// }

	/**
	 * Flash a success message to the session.
	 *
	 * @param  string $message
	 * @param  string $title
	 * @return bool
	 */
	public function success($message, $title=null)
	{
		$this->flashAlert($message, $title, 'success');
	}

	/**
	 * Flash a info message to the session.
	 *
	 * @param  string $message
	 * @param  string $title
	 * @return bool
	 */
	public function info($message, $title=null)
	{
		$this->flashAlert($message, $title, 'info');
	}

	/**
	 * Flash an error message to the session.
	 *
	 * @param  string $message
	 * @param  string $title
	 * @return bool
	 */
	public function error($message, $title=null)
	{
		$this->flashAlert($message, $title, 'error');
	}

	public function render()
	{
		$message = $this->session->get('alerter.message');

		$title = $this->session->get('alerter.title');

		switch ($this->session->get('alerter.type')) {
			case 'success':
				$this->driver->success($message, $title);
				break;

			case 'info':
				$this->driver->info($message, $title);
				break;

			case 'error':
				$this->driver->error($message, $title);
				break;
		}
	}

	/**
	 * Set details for the flash message.
	 * @return [type] [description]
	 */
	protected function flashAlert($message, $title, $type)
	{
		$this->message 	= $message;
		$this->title 	= $title;
		$this->type 	= $type;

		$this->alert();
	}

	/**
	 * Extend the Alerter.
	 *
	 * @param  string   $driver
	 * @param  AlertView $implementation
	 * @return [type]
	 */
	public function extend($driver, AlertView $implementation)
	{
		$this->drivers[] = $implementation;
	}

	/**
	 * Flash the message to the session.
	 *
	 * @param  string $message
	 * @param  string $title
	 */
	protected function alert()
	{
		$this->session->flash('alerter.message', $this->message);

		$this->session->flash('alerter.title', $this->title);

		$this->session->flash('alerter.type', $this->type);

		return true;
	}

}