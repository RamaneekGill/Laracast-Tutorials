<?php

//abstract class can never be instantiated alone
abstract class Shape {
	//use the parent class as a source of contract
	//want to make sure every shape should have a getArea function
	//solution: use an abstract class
	//theres never really a shape, we only instantiate specific shapes,

	public $color;
	public function __construct($color = 'red') { //so if color isnt set it is red
		$this->color = $color;                    //automatically
	}

	//now to get ANY shape's color we only need a getColor() for the parent class
	public function getColor() {
		return $this->color;
	}

	//this forces every subclass to HAVE a getArea() method
	//when a method is declared abstract it doesn't need a body (e.g. {}'s)
	abstract protected function getArea(); //
}

class Square extends Shape {
	protected $length = 4;

	public function getArea() {
		// no one algorithm for this
		return pow($this->length, 2);
	}

}

class Triangle extends Shape {
	protected $base = 4;
	protected $height = 7;

	//when functions are named the same as its parent, the child overrides the parent
	//so this function is used if the object is a triangle, else the shape's getArea()
	//is used
	public function getArea() {
		// no one algorithm for this
		return 0.5 * $this->base * $this->height;
	}
}

class Circle extends Shape {
	protected $radius = 5;
	public function getArea() {
		return pi()*$this->radius*$this->radius;
	}
}

echo (new Square('yellow'))->getArea();
echo "\n";
echo (new Triangle)->getArea();
echo "\n"; 
echo (new Circle)->getArea();


?>