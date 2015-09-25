<?php


class PubSub
{
	private $_events = array();

	public function subscribe($name, $callback)
	{
		if ( empty($this->_events[$name]) ) {

			$this->_events[$name] = array();
		}

		$this->_events[$name][] = $callback;

		return true;
	}

	public function publish($name)
	{
		if ( empty($this->_events[$name]) ) {

			return true;
		}

		foreach ($this->_events[$name] as $callback) {

			call_user_func($callback);
		}

		return true;
	}
}



?>
