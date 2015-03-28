<?php

class Bank {
	//public static $tax = .09; //WRONG should not be public since can be changed
	//private static $tax = .09; //WRONG needs to be accessed by other classes
	const TAX = 0.13; //constants make it so the variable is immutable
}

echo Bank::TAX;
?>