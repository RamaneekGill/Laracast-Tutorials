<?php

interface CastToJson {
	public function toJson();
}

class User implements CastToJson{}
class Collection implements CastToJson{};

interface Repository {
	public function save($data);
}

class MongoRepository implements Repository{
	public function save($data) {

	}
}

class FileRepository implements Repository{
	public function save($data){

	}
}

//For Blogs
interface CanBeFiltered {
	public function filter();
}

class Favorited implements CanBeFiltered {
	public function filter() {
		
	}	
}

class Unwatched implements CanBeFiltered {
	public function filter() {
		
	}	
}

class Difficulty implements CanBeFiltered {
	public function filter() {
		
	}	
}
?>