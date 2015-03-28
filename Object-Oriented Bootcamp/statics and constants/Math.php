<?php
//most of the time statics are not the right choice
//static something if you need to have it shared across all similar classes

//public statics are namespaced but globally accessible functions
class Math {
	//add() doesn't need to be dynamic
	//makes it a global function without requiring a specific instance
	public static function add(...$nums) {
		//have to be careful to not call other functions since this is static
		return array_sum($nums);
	}
}

echo Math::add(1,2,3,4);
?>