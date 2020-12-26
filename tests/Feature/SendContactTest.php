<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class SendContactTest extends TestCase
{
	private $message = [
		'name' => 'John',
		'email' => 'john@example.com',
		'subject' => 'lorem ipsum',
		'message' => 'Lorum ipsum dolor eset adimim sectrtue',
		'Hacker' => '1337',
	];
	/**
	 * get contact page
	 *
	 * @return void
	 */
	public function testThatWeCanVisitContactPage()
	{
		$this->get('contact')->assertOk();
	}

	/**
	 * Send email
	 *
	 * @return bool test result
	 */
	public function testWeCanSendEmail()
	{
		$response = $this->post('contact', $this->message);
		$response->assertOk(); // Assert a redirect
		$response->assertSee('success');
	}

	/**
	 * Assert that error is logged
	 * When the mail fails to send
	 *
	 * @return bool test result
	 */
	public function testWeCanLogError()
	{
		// Set the mail driver in configuration to null
		// This will trigger error
		config(['mail.driver' => null]);
		$response = $this->post('contact', $this->message);
		$response->assertStatus(500);
		// Set the mail driver back to smtp
		config(['mail.driver' => 'smtp']);
	}
}
