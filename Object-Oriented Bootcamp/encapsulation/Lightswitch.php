<?php 

class LightSwitch {
	public function on() {

	}

	public function off() {

	}

//private means the method can only be accessed from within the switch class
	private function connect() {

	}

	protected function activate() {

	}
}

$switch = new LightSwitch;
//user shouldn't need to know that the connect() and activate() method exicst

?>