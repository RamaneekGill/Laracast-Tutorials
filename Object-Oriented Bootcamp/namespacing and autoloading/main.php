 <?php

//doing this is a huge pain, also not a good practise:
//require 'Person.php'
//want to autoload everything

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;


//$ram = new Acme\Person('Ramaneek');
$ram = new Person('Ramaneek');

//$staff = new Acme\Staff();
$staff = new Staff();

$company = new Acme\Business($staff);
$company->hire($ram);
$company->hire(new Acme\Users\Person('Gagan'));
var_dump($company->getMembers());
?> 