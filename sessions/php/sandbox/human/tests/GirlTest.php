<?php


require_once 'girl.class.php';
require_once 'boy.class.php';


class GirlTest extends PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		$this->girl = new Girl();
		$this->boy = new Boy();
	}

	public function testIfCanFallInLove()
	{
		$girl = $this
		->getMockBuilder('Girl')
		->setMethods(array('like'))
		->getMock();

		$girl->method('like')->willReturn(true);

		$boy = $this
		->getMockBuilder('Boy')
		->getMock();

		$boy->method('like')->willReturn(true);

		$result = $girl->fallInLove( $boy );

		$this->assertTrue( $result );
	}

	public function testIfCanBeRejected()
	{
		$boy = $this
		->getMockBuilder('Boy')
		->getMock();

		$boy->method('like')->willReturn(false);

		$result = $this->girl->fallInLove( $boy );

		$this->assertFalse( $result );
	}
}



?>
