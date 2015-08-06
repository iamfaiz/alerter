<?php

namespace Alerter;

interface Flashable
{
	/**
	 * Flash a message.
	 *
	 * @param  string $message
	 * @param  string $data
	 */
	public function flash($message, $data);

	/**
	 * Get a key from the session.
	 *
	 * @param  string $key
	 */
	public function get($key);
}