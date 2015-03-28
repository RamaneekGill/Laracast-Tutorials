<?php //INTERFACE
//An interface is like a contract, it is a little more abstract
//Lays down the terms for what any implementation must adhere to, e.g. commonalities
interface Animal {
	public function communicate();
} 

//Implementation time

class Dog implements Animal { 
	//since we implement Animal we must have all the functions it declares
	public function communicate() {
		return 'bark';
	}
}

class Cat implements Animal { 
	//since we implement Animal we must have all the functions it declares
	public function communicate() {
		return 'nyan';
	}
}

?>