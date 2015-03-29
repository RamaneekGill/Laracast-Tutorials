<?php namespace Acme;

abstract class Sub {
	public function make() {
		return $this
			->layBread()
			->addLettuce()
			->addPrimaryToppings() //abstract func
			->addSauces();
	}

	protected function layBread() {
		var_dump('laying down bread');
		return $this;
	}
	protected function addLettuce() {
		var_dump('healthy lettuce');
		return $this;
	}
	protected function addSauces() {
		var_dump('adding sauce');
		return $this;
	}
	protected abstract function addPrimaryToppings();
		//this requires subclasses to implement their
		//version of this method
		//remember it can't be instantiated in this class
}


?>