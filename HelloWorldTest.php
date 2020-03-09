<?php

class HelloWorldTest extends \PHPUnit_Framework_TestCase {
	$greeting = "Hello World";
	$requiredGreeting = "Hello World";
	$this->assertEquals($greeting, $requiredGreeting);
}

?>
