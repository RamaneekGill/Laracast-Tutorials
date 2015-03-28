<?php
//Program to an interface NOT to an implementation/concretion
//If there are ever classes where you could have multiple 
//different methods to execute this task then you NEED to create an interface

interface Logger {
	//polymorphism and strategy pattern   <-- research this
	public function execute($message);
}

class LogToFile implements Logger{
	public function execute($message) {
		var_dump('log the message to a file ' . $message);
	}
}

class LogToDatabase implements Logger{
	public function execute($message) {
		var_dump('log the message to a database ' . $message);
	}
}

// ...

class UsersController {
	protected $logger;
	//public function __construct(LogToFile $logger) {
	//To work I need some kind of functionality that logs
	//Something that is binded to the Logger contract
	public function __construct(Logger $logger) {
		$this->logger = $logger;
	}

	public function show() {
		$user = 'John Doe';
		//log the info
		$this->logger->execute($user);
	}
}

$controller = new UsersController(new LogToFile);
$controller->show();

$controller2 = new UsersController(new LogToDatabase);
$controller2->show();

?>