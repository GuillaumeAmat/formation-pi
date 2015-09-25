<?php


require_once 'boy.class.php';
require_once 'girl.class.php';


class BoyTest extends PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		$this->boy = new Boy();
		$this->girl = new Girl();
	}

	public function testIfCanFallInLove()
	{
		$boy = $this
		->getMockBuilder('Boy')
		->setMethods(array('like'))
		->getMock();

		$boy->method('like')->willReturn(true);

		$girl = $this
		->getMockBuilder('Girl')
		->getMock();

		$girl->method('like')->willReturn(true);

		$result = $boy->fallInLove( $girl );

		$this->assertTrue( $result );
	}

	public function testIfCanBeRejected()
	{
		$girl = $this
		->getMockBuilder('Girl')
		->getMock();

		$girl->method('like')->willReturn(false);

		$result = $this->boy->fallInLove( $girl );

		$this->assertFalse( $result );
	}
}



?>
