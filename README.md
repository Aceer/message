# CMessage
[![Build Status](https://travis-ci.org/Aceer/message.svg?branch=master)](https://travis-ci.org/Aceer/message.svg?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/Aceer/message/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Aceer/message/)
[![Build Status](https://scrutinizer-ci.com/g/Aceer/message/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Aceer/message/)

This is a class to show messages with PHP and Javascript.
Use it with ANAX MVC.

You can choose how long you what the message to show or if the message will
stay all the time.

===========
User guide:
-------------------

Just download the class and include it in the php autoloader.
After that create a new object of the class, ex:

	$message = new /Aceer/Message/CMessage();
	
Then choose what kind of message you want to send (success,danger,warning,info).

	$message->success("You have successfully logged in!");

You can also supply how long the message will display before it disappear 
and if value is inputed the message will not disappear.

	$message->success("You have successfully logged in!",3000);
	// 3000 = 3 seconds

There are 4 type of messages to send:
	
	- danger
		CSS class = 'alert alert-danger';
	- success 
		CSS class = 'alert alert-success';
	- info 
		CSS class = 'alert alert-info';
	- warning 
		CSS class = 'alert alert-warning';
		
Thay use Twitter Bootstrap css standard but if you want you can make your own
default css class values:

	$message = new /Aceer/Message/CMessage(
		[
			"success" => "some css class",
			"danger" => "some css class",
			"warning" => "some css class",
			"info" => "some css class",
		]);