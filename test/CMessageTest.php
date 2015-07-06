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
		$e->success('Success');
		$t1 = $_SESSION['displayMessage'];
		$t2 = "<div id='displayMessage' class='alert alert-success'>Success</div>";

		$this->assertEquals($t1, $t2, "Error --------> success message");
	}

	/**
	* Test 
	*
	* @return void
	*
	*/
	public function testDangerClass()
	{
		$e = new \Aceer\Message\CMessage();
		$e->danger('Danger');
		$t1 = $_SESSION['displayMessage'];
		$t2 = "<div id='displayMessage' class='alert alert-danger'>Danger</div>";

		$this->assertEquals($t1, $t2, "Error --------> danger message");
	}

		/**
	* Test 
	*
	* @return void
	*
	*/
	public function testWarningClass()
	{
		$e = new \Aceer\Message\CMessage();
		$e->warning('Warning');
		$t1 = $_SESSION['displayMessage'];
		$t2 = "<div id='displayMessage' class='alert alert-warning'>Warning</div>";

		$this->assertEquals($t1, $t2, "Error --------> Warning message");
	}

	/**
	* Test 
	*
	* @return void
	*
	*/
	public function testinfoClass()
	{
		$e = new \Aceer\Message\CMessage();
		$e->info('Info');
		$t1 = $_SESSION['displayMessage'];
		$t2 = "<div id='displayMessage' class='alert alert-info'>Info</div>";

		$this->assertEquals($t1, $t2, "Error --------> info message");
	}

		/**
	* Test 
	*
	* @return void
	*
	*/
	public function testCustomClass1()
	{
		$ar = [
				'danger' => 'myDanger',
				'success' => 'mySuccess',
				'info' => 'myInfo',
				'warning' => 'myWarning'
			];

		$e = new \Aceer\Message\CMessage($ar);

		$e->success('Success');
		$t1 = $_SESSION['displayMessage'];
		$t2 = "<div id='displayMessage' class='mySuccess'>Success</div>";

		$this->assertEquals($t1, $t2, "Error --------> false custom class success");
	}
};
