<?php

namespace Aceer\Message;

class CMessage
{
	private $dangerClass = 'alert alert-danger';
	private $successClass = 'alert alert-success';
	private $infoClass = 'alert alert-info';
	private $warningClass = 'alert alert-warning';

	public function __construct($ar = null){
		if($ar){
			$this->dangerClass = $ar['danger'];
			$this->successClass = $ar['success'];
			$this->infoClass = $ar['info'];
			$this->warningClass = $ar['waring'];
		}
	}

	public function success($m,$sec = 0){
		$this->displayMessage($m,$sec,$this->successClass);
	}

	public function danger($m,$sec = 0){
		$this->displayMessage($m,$sec,$this->dangerClass);
	}

	public function warning($m,$sec = 0){
		$this->displayMessage($m,$sec,$this->warningClass);
	}

	public function info($m,$sec = 0){
		$this->displayMessage($m,$sec,$this->infoClass);
	}

	public function displayMessage($msg,$sec,$class){

		$jv = NULL;
		if($sec){
			$jv = "<script>setTimeout(function(){document.getElementById('displayMessage').className = 'displayNone';},$sec);</script>";
		}
		$_SESSION['displayMessage'] = "<div id='displayMessage' class='$class'>$msg</div>$jv";

	}
}
?>
