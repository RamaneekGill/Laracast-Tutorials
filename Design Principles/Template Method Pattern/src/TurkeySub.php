<?php namespace Acme;

class TurkeySub extends Sub{

	public function addTurkey() {
		var_dump('turkey too!');
		return $this;
	}
	public function addPrimaryToppings() {
		var_dump('turkey!');
		return $this;
	}
}

?>