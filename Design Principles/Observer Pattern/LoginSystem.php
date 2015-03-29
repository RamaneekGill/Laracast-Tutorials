<?php
//A basic event system; Laravel uses this
interface Subject{ //the publisher
	public function attach(Observer $observer);
	public function detach($index);
	//public function release(); //cleans out the observer and returns to client
	public function notify();
} 

interface Observer { //the subscriber
	public function handle(); //updater
} 

class Login implements Subject {
	protected $observers = [];

	public function attach(Observer $observer) {
		$this->observers[] = $observer;
		//return this;
	}

	public function detach($index) {
		unset($this->observers[$index]);
	}

	public function notify() {
		foreach  ($this->observers as $observer) {
			$observer->handle();
		}
	}

	public function fire() {
		$this->notify();
	}
}

class LogHandler implements Observer {
	public function handle() {
		var_dump('log something important.');
	}
}

class EmailHandler implements Observer {
	public function handle() {
		var_dump('email something.');
	}
}

$login = new Login;
$login->attach(new LogHandler);
$login->attach(new EmailHandler);
$login->fire();

?>