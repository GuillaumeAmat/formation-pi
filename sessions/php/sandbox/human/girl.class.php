<?php

require_once 'human.class.php';


class Girl extends Human
{
	private $_boyfriend;
	

	public function fallInLove($boy)
	{
		if ( $boy->like($this) and $this->like($boy) ) {

			$this->_boyfriend = $boy;

			return true;
		}

		return false;
	}

	public function getPregnant()
	{
		$this->publish('pregnant');

		return true;
	}

	public function like($boy)
	{
		if (rand(0, 3) === 0) {

			return true;
		}

		return false;
	}
}



?>
