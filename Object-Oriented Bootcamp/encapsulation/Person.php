<?php

//getters and setters are to give ourselves some protection and security
//ideally want to hide as much information and behaviour of the class as possible

//private means the method can only be accessed from within the class
//protected means that this class subclass can access the class 
//(done when extending a class)

class Person {
	//public instance variables allows a user to access the variable outside the
	//class directly
	//need encapsulation to protect these variables
	private $name;
	private $age;

	public function __construct($name) {
		$this->name = $name;
	}

	public function setAge($age) {
		if ($age < 18) {
			throw new Exception("Person isn't old enough");
		}

		$this->age = $age;
	}

	public function getAge() {
		return $this->age * 365;
	}

}

$john = new Person('John Doe');
$john->setAge(30);
var_dump($john->getAge());

?>