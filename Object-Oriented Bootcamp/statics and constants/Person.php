<?php

class Person {
	//static means  shared
	public static $age = 1;

	public function haveBirthday() {
		//can't access like $this->age since it hasn't been instantiated
		//it is a static/shared variable
		static::$age += 1;
	}
}

$ram = new Person;
$ram->haveBirthday();
echo Person::$age;
//the static means the variable is shared accross ALL Person classes
//they aren't bound to any object
//breaks encapsulation so an age should NEVER be static, should be an instance

?>