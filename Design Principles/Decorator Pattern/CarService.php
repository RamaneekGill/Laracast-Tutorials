<?php

interface CarService {
	public function getCost();
	public function getDescription();
}

class BasicService implements CarService {

	public function getCost() {
		return 20;
	}

	public function getDescription() {
		return 'Basic service';
	}
}

class OilChange implements CarService {
	protected $carService;

	function __construct(CarService $carService) {
		$this->carService = $carService;
	}

	public function getCost() {
		return $this->carService->getCost() + 15;
	}

	public function getDescription() {
		return $this->carService->getDescription() . ', oil change';
	}
}

class TireRotation implements CarService {
	protected $carService;

	function __construct(CarService $carService) {
		$this->carService = $carService;
	}

	public function getCost() {
		return $this->carService->getCost() + 7.50;
	}

	public function getDescription() {
		return $this->carService->getDescription() . ', tire rotation';
	}
}

echo (new OilChange(new TireRotation(new BasicService())))->getCost() . "\n";
echo (new OilChange(new TireRotation(new BasicService())))->getDescription() . "\n";

?>