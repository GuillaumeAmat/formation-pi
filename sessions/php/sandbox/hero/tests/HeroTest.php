<?php

require 'hero.class.php';


class HeroTest extends PHPUnit_Framework_TestCase
{
	function testFightAnEnemy()
	{
		$hero = new Hero('Superman');

		$result = $hero->fight('Zorg');

		$this->assertEquals(true, $result);
		$this->expectOutputString('Superman defeated Zorg!'. PHP_EOL);
	}

	/**
	 * @expectedException        Exception
	 * @expectedExceptionMessage You can't fight shadows
	 */
	function testFightNoOne()
	{
		$hero = new Hero('Don Quichotte');

		$this->expectOutputString('Drunk hero here!'. PHP_EOL);

		$result = $hero->fight();
	}

	function testFightEnemies()
	{
		$hero = new Hero('Batman');

		$result = $hero->fight( array('Joker', 'Bane') );

		$this->assertEquals(true, $result);
		$this->expectOutputString('Batman defeated: Joker, Bane!'. PHP_EOL);
	}

	public function testStub()
	{
		// Create a stub for the SomeClass class.
		$hero = $this
		->getMockBuilder('Hero')
		->disableOriginalConstructor()
		->getMock();

		// Configure the stub.
		$hero
		->method('fight')
		->willReturn(true);

		// Calling $hero->fight() will now always return true
		$this->assertEquals(true, $hero->fight());
	}
}



 ?>
