<?php 

require 'vendor/autoload.php';

$elevator = new Acme\Elevator(new Acme\EnvironmentMonitor);

$elevator->addPerson('John Doe');
$elevator->addPerson('Ram Gill');

$elevator->checkForAlarms();

/*
this is too procedural
if ($elevator->monitor()->temperature() >= 100) {
	$elevator->monitor()->triggerAlarm();
}
*/
