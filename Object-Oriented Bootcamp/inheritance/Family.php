<?php
//Inheritance is taking attributes from a parent

class Mother {

	public function getEyeCount(){
		return 2;
	}

}

class Child extends Mother { //this class inherits attributes from Mother

}

$child = new Child;
var_dump($child->getEyeCount());

?>