<?php
//An interface is a contract
//Whenever youre checking the type of an object to proceed you should be
//leveraging polymorphism
//polymorphism is the ability to process objects differently depending on 
//their data type or class
interface Provider { //Interfaces can only provide PUBLIC methods 
	public function authorize();
}

function login(Provider $provider) { //doesn't care which provider just wants one
	$provider->authorize();
}

//An abstract class can't be instantiated on its own
//Unlike interfaces can have private/protected functions
//Interfaces defines a public API, no logic is stored in an interface
//You can implement multiple interfaces but can only inherit one class
//In an abstract class you also make a contract and have some logic
//Inheritance limits you a bit allows you to retain related functionality
//when there is alot of related functionality it is better to use abstract classes
abstract class Provider {
	//Abstract methods mean that a subclass must create a method like this
	abstract protected getAuthorizationURL();
	//each subclass should give a unique/uncommon return value of the abstract func
}

class FacebookProvider extends Provider {
	protected function getAuthorizationURL() {

	}
}


?>