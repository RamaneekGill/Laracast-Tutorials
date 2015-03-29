<?php namespace Acme;

use Exception;

class EnvironmentMonitor {
	protected $temperature = 70;

	public function increaseTemperature($degrees = 18) {
		$this->temperature += $degrees;
	}

	public function temperature() {
		return $this->temperature;
	}

	public function triggerAlarm() {
		throw new Exception('temperature too high!'); 
	}

	public function checkForAlarms() {
		if ($this->temperature() >= 100) {
			$this->triggerAlarm();
		}
	}
}

?>