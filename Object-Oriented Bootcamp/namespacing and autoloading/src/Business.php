<?php

namespace Acme;

use Acme\Users\Person;

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
?>