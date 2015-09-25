<?php

require_once 'human.class.php';


class Boy extends Human
{
	private $_girlfriend;


	public function fallInLove($girl)
	{
		if ( $girl->like($this) and $this->like($girl) ) {

			$this->_girlfriend = $girl;

			$this->_girlfriend->subscribe('pregnant', function ()
			{
				$this->willBeDaddy();
			});

			return true;
		}

		return false;
	}

	public function like($girl)
	{
		if (rand(0, 1) === 0) {

			return true;
		}

		return false;
	}

	public function willBeDaddy()
	{
		echo 'I will be a DAAAAAD!!';
	}
}



?>
