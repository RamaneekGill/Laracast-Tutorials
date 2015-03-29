<?php namespace Acme;

class Book implements BookInterface{
	public function open() {
		var_dump('opening book');
	}

	public function turnPage() {
		var_dump('turning a page');
	}
}

?>