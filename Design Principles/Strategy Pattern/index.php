<?php 

//encapsulate and make them interchangeable

interface Logger {
	public function log($data);
}

//define a family of algorithms
class LogToFile implements Logger{
	public function log($data) {
		var_dump('logged data to file');
	}
}

class LogToDatabase implements Logger{
	public function log($data) {
		var_dump('logged data to DB');
	}
}

class LogToXWebService implements Logger{
	public function log($data) {
		var_dump('logged data to a SaaS');
	}
}

class App {
	public function log($data, Logger $logger) { //references above log()'s
		$logger->log($data);
	}
}

$app = new App;
$app->log('sample data', new LogToDatabase);
$app->log('sample data', new LogToXWebService);
$app->log('sample data', new LogToFile);

?>