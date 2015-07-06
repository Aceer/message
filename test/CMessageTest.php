<?php

namespace Aceer\Message;

class CMessageTest extends \PHPUnit_Framework_TestCase
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
		$t2 = "<div id='displayMessage' class='alert alert-success'>Hej</div>";


		$this->assertEquals($t1, $t2, "Error --------> success message");
	}
};
