<?php

namespace Project\Test;

use PHPUnit_Framework_TestCase;
use Project\App;

class AppTest extends PHPUnit_Framework_TestCase {

	public function testAppConstruction() {
		$this->assertTrue( new App() instanceof App );
	}

}
