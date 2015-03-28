<?php

class Person {
	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}

}

class Business {
	//business hires a person, when they do they join the staff
	//need staff before business
	protected $staff;
	public function __construct(Staff $staff) {
		$this->staff = $staff;
	}

	public function hire(Person $person) { 
		//typehint that a Person is only going to be passed into this function
		//should the business be responsible for handling and tracking its staff
			//no 
		//add person to the staff collection
		$this->staff->add($person); //send this message to the Staff class
	}

	public function getMembers() {
		return $this->staff->getMembers();
	}
}

class Staff {
	protected $members = [];

	public function __construct($members = []) { //staff isn't always req'd
		$this->members = $members;
	}

	public function add(Person $person) { //typehint Person
		$this->members[] = $person; 
	}

	public function getMembers() {
		return $this->members;
	}
}

//The business depends on staff to run
	//this is a dependancy

$ram = new Person('Ramaneek');
$staff = new Staff();
$company = new Business($staff);
$company->hire($ram);
$company->hire(new Person('Gagan'));
var_dump($company->getMembers());
?>