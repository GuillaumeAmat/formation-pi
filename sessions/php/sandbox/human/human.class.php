<?php


require_once 'pubsub.class.php';


class Human
{
	private $_age = 0;

	private $_pubsub;

	public function __construct()
	{
		$this->_pubsub = new PubSub();
	}

	public function getAge()
	{
		return $this->_age;
	}

	public function age($nbOfYears = 1)
	{
		$this->_age += $nbOfYears;

		$this->_pubsub->publish('age');

		return $this->_age;
	}

	public function eat()
	{
		echo 'Yummy!';

		return true;
	}

	public function brokeTheLeg()
	{
		throw new Exception('Ouch, my leg!');
	}

	public function subscribe($name, $callback)
	{
		$this->_pubsub->subscribe($name, $callback);
	}

	public function publish($name)
	{
		$this->_pubsub->publish($name);
	}
}



?>
