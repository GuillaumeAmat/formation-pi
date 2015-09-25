<?php


require_once 'human.class.php';


class HumanTest extends PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		$this->human = new Human();
	}

	public function testIfCanAge()
	{
		$this->assertEquals(0, $this->human->getAge());

		$this->human->age();
		$this->human->age();
		$this->human->age();

		$this->assertEquals(3, $this->human->getAge());
	}

	public function testIfCanEat()
	{
		$result = $this->human->eat();

		$this->assertTrue($result);
		$this->expectOutputString('Yummy!');
	}

	/**
	 * @expectedException Exception
	 * @expectedExceptionMessage Ouch, my leg!
	 */
	public function testIfCanBrokeTheLeg()
	{
		$this->human->brokeTheLeg();
	}
}



?>
