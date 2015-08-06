<?php

use Alerter\AlertView;
use Alerter\Flashable;

class AlerterTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->session = Mockery::mock(Flashable::class);
		$this->driver = Mockery::mock(AlertView::class);

		$this->alerter = new Alerter\Alerter($this->session, $this->driver);
	}

	public function testDisplaysSuccessAlert()
	{
		$this->session
		 	 ->shouldReceive('flash')
		 	 ->once()
			 ->with('alerter.message', 'This is a success message.');

		$this->session
			 ->shouldReceive('flash')
			 ->once()
			 ->with('alerter.title', 'Success Alert');

		$this->session
		 	 ->shouldReceive('flash')
		 	 ->once()
		 	 ->with('alerter.type', 'success');

		$this->alerter->success('This is a success message.', 'Success Alert');
	}

	public function testDisplaysInfoAlert()
	{
		$this->session
		 	 ->shouldReceive('flash')
		 	 ->once()
			 ->with('alerter.message', 'This is an information message.');

		$this->session
			 ->shouldReceive('flash')
			 ->once()
			 ->with('alerter.title', 'Info Alert');

		$this->session
		 	 ->shouldReceive('flash')
		 	 ->once()
		 	 ->with('alerter.type', 'info');

		$this->alerter->info('This is an information message.', 'Info Alert');
	}

	public function testDisplaysErrorAlert()
	{
		$this->session
		 	 ->shouldReceive('flash')
		 	 ->once()
			 ->with('alerter.message', 'This is an error message.');

		$this->session
			 ->shouldReceive('flash')
			 ->once()
			 ->with('alerter.title', 'Error Alert');

		$this->session
		 	 ->shouldReceive('flash')
		 	 ->once()
		 	 ->with('alerter.type', 'error');

		$this->alerter->error('This is an error message.', 'Error Alert');
	}

	public function tearDown()
	{
		Mockery::close();
	}
}