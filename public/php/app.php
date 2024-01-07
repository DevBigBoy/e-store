<?php

include __DIR__ . '/A/Person.php';
include __DIR__ . '/B/Person.php';

$person = new A\Person;
$person1 = new B\Person;

$person->name = 'younes';
$person1->name = 'yassin';


A\Person::$country = 'Egypt';

$person::$country = 'Palestine';
$person1::$country = 'Jordan';

var_dump($person, $person1);

echo A\Person::$country;