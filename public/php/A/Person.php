<?php

namespace A;

define('AJYAL', true);
const LARAVEL = 'Laravel A';

function hello()
{
    echo 'Hello A';
}

class Person
{
    protected const MALE = 'm';
    const FEMALE = 'f';

    public $name;
    protected $gender;
    private $age;

    public static $country;


    public function __construct()
    {
        echo __CLASS__;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public static function setCountry($country)
    {
        self::$country = $country;
    }
}