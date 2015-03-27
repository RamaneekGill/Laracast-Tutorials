<?php

class Task {
	//public means outside of this class anyone can access this instance 
	public $description;
	public $completed = false;

	//this function is called everytime a new class is created
	public function __construct($description) {
		//$this refers to this object
		//more specifically this instance of this class
		$this->description = $description;
	}

	public function complete() {
		$this->completed = true;
	}
}

$task = new Task('learn OOP');
$task->complete();
$task2 = new Task('groceries');
var_dump($task->completed);
var_dump($task2->description);

?>