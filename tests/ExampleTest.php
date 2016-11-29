<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testSendMail()
	{
		$data = [
			'from' => 'vanhuy.vu@gmail.com',
			'to' => 'vanhuy.vu@gmail.com',
			'subject' => 'vanhuy.vu@gmail.com',
		];

		$result = \Mail::send('emails.email_report', $data, function ($message) use ($data) {
		    $message->from($data['from'], 'Laravel');

		    $message->to($data['to']);
		    $message->to($data['subject']);
		});

		dd($result);
	}

}
