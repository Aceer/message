<?php

namespace Aceer\Message;

require '../autoloader.php';

class CMessageTest 
{
	/**
	* Test 
	*
	* @return void
	*
	*/
	public function testSucccessClass()
	{
		$e = new \Aceer\Message\CMessage();
		$e->success('Hej');
		$t1 = $_SESSION['displayMessage'];

		echo $t1;
	}
};

	$test = new CMessagetest();

	$test->testSucccessClass();
