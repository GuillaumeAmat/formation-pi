<?php

class Hero
{
	private $_name = 'Unknown hero';

	private $_nbWins = 0;

	public function __construct($name)
	{
		$this->_name = $name;
	}

	public function fight($enemy = null)
	{
		if ($enemy === null) {

			echo 'Drunk hero here!'. PHP_EOL;

			throw new Exception('You can\'t fight shadows');
		}

		if ( is_array($enemy) ) {

			$this->_nbWins += count($enemy);
			echo $this->_name .' defeated: '. implode($enemy, ', ') .'!'. PHP_EOL;
		}
		else {

			$this->_nbWins += 1;
			echo $this->_name .' defeated '. $enemy .'!'. PHP_EOL;
		}

		return true;
	}
}



 ?>
