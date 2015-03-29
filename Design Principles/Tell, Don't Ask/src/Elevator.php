<?php namespace Acme;

class Elevator {
	protected $monitor;
	protected $occupants = [];

	function __construct(EnvironmentMonitor $monitor) {
		$this->monitor = $monitor; 
	}

	public function addPerson($person) {
		$this->occupants = $person;
		$this->monitor->increaseTemperature();
	}
	/*
	Not needed anymore
	public function monitor() {
		return $this->monitor; 
	}
	*/
	public function checkForAlarms() {
		$this->monitor->checkForAlarms();
	}
}

?>