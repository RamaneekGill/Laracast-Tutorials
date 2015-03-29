<?php

require 'vendor/autoload.php'; //this autoloads everything
use Acme\Book;
use Acme\BookInterface;
use Acme\Kindle;
use Acme\eReaderInterface;
use Acme\KindleAdapter;

class Person {
	public function read(BookInterface $book) {
		$book->open();
		$book->turnPage();
	}
}

(new Person)->read(new Book);

(new Person)->read(new KindleAdapter(new Kindle));

?>