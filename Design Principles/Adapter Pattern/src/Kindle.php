<?php namespace Acme;

class Kindle implements eReaderInterface{
	public function turnOn() {
		var_dump('kindle turned on');
	}

	public function pressNextButton() {
		var_dump('pressed next buutton');
	}

}

?>