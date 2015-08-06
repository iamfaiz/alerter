<?php

namespace Alerter;

use Illuminate\Session\Store;

class LaravelFlashable implements Flashable
{
	/**
	 * @var Store
	 */
	protected $session;

	/**
	 * @param Store $session
	 */
	public function __construct(Store $session)
	{
		$this->session = $session;
	}

    /**
     * Flash a message to the session.
     *
     * @param $name
     * @param $data
     */
	public function flash($title, $data)
	{
		$this->session->flash($title, $data);
	}


	public function get($key)
	{
		return $this->session->get($key);
	}
}
