<?php

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
?>