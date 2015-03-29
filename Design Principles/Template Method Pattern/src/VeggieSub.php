<?php namespace Acme;

class VeggieSub extends Sub {
	public function addVeggie() {
		var_dump('veggies not turky yo!');
		return $this;
	}
	public function addPrimaryToppings() {
		var_dump('veggies!');
		return $this;
	}
}

?>