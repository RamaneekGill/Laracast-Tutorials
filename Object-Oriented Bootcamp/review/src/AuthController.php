<?php namespace Acme;


class AuthController implements RespondsToUserRegistration{
	//constructor injection when using the dependancy multiple times in the class
	//use method injection when only needing a dependancy rarely

	protected $registration;

	public function __construct(RegisterUser $registration) {
		$this->registration = $registration;
	}
	
	public function register() { //can do method injection by makign input RegisterUser registration
		//method injection is passing a dependancy into the method
		$this->registration->execute([], $this);
	}

	public function userRegisteredSuccessfully() {
		var_dump('created successfully');
	}

	public function userRegisteredFailed() {
		var_dump('created unsuccessfully');
	}
}

?>