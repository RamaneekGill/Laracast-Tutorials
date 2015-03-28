<?php

//getters and setters are to give ourselves some protection and security
//e.g. not allowing someone with age < 18, so we need protection
	//this is called validation


class Person {
	public $name;
	public $age;

	public function __construct($name) {
		$this->name = $name;
	}
	//behaviour associated with setting and getting a property
		//e.g. you can't be younger than 18

	public function setAge($age) {
		if ($age < 18) {
			throw new Exception("Person isn't old enough");
		}

		$this->age = $age;
	}
	//we can set specific behaviours for getters to all follow a specific guideline
	//e.g. want age in days, hard to do this without a getter since have to keep
	//manually calculating it
	public function getAge() {
		return $this->age * 365;
	}
	//next lets learn encapsulation, don't let people modify instance variables directly
	//for security purposes 
}

$john = new Person('John Doe');
$john->setAge(30);
var_dump($john->getAge());

?>