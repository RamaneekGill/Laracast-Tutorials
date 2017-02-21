<?php

abstract class HomeChecker {
	protected $successor;

	public abstract function check(HomeStatus $home);

	public function succeedWith(HomeChecker $successor) {
		$this->successor = $successor;
	}

	public function next(HomeStatus $home) {
		if ($this->successor) {
			$this->successor->check($home);
		}
	}
}

class Locks extends HomeChecker{ //makes sure door is locked
	public function check(HomeStatus $home) {
		if (! $home->locked) {
			throw new Exception('Doors not locked!');
		}

		$this->next($home);
	}
}

class Lights extends HomeChecker{ //makes sure lights are off
	public function check(HomeStatus $home) {
		if (! $home->lightsOff) {
			throw new Exception('Lights are not off!');
		}

		$this->next($home);
	}
}

class Alarm extends HomeChecker{ //makes sure alarm is off
	public function check(HomeStatus $home) {
		if (! $home->alarmOn) {
			throw new Exception('alarm is not on!');
		}

		$this->next($home);
	}
}

class HomeStatus {
	public $alarmOn = true;
	public $locked = true;
	public $lightsOff = true;
}

//set objects
$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

//set chain
$locks->succeedWith($lights);
$lights->succeedWith($alarm);
//execute chain
$locks->check(new HomeStatus);
