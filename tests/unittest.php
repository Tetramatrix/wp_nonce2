<?php
/*
*      Copyright (c) 2017 Chi Hoang 
*      All rights reserved
*/

use src\Context;
use src\NonceFactory as Test;

class unittest extends PHPUnit_Framework_TestCase
{ 
	public function testexample1()
	{		
		$stub = $this->getMockBuilder("Src\Test",array('create'))
			->setMethods(array('create'))
			->disableOriginalConstructor()
                        ->disableOriginalClone()
                        ->disableArgumentCloning()
                        ->getMock();
				
		// Configure the stub.
		$stub->method("create")->willReturn('foo');
		
		$this->assertEquals('foo', $stub->create());
		
	}
}
