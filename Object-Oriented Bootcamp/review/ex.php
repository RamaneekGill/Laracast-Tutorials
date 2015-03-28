<?php

require 'vendor/autoload.php'; //this autoloads everything
$registration = new Acme\RegisterUser;
$authController = new Acme\AuthController($registration);

$authController->register();

?> 	