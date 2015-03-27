<?php

class Task {
	//public means outside of this class anyone can access this property 
	public $description = 'Go to the store';

}

$task = new Task();
//to access
var_dump($task->description)

?>