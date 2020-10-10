<?php

// Classes taken from constructor.php to demonstrate including them in a file.
class Person 
{
    const AVG_LIFE_EXPECT = 80;

    public $firstname = "Jake";
    public $secondName = "Hall";
    public $age = 21;
    private $yearBorn = 1999;

    public function __construct($firstname = "Default", $secondName = "Default", $age = 0) 
    {
        $this->firstname = $firstname;
        $this->secondName = $secondName;
        $this->age = $age;
        $this->yearBorn = date("Y") - $age;
    }

    public static function createPerson($fname, $sname, $passage) {
        $instance = new static();
        $instance->firstname = $fname;
        $instance->secondName = $sname;
        $instance->age = $passage;
        $instance->yearBorn = date("Y") - $passage;
        return $instance;
    }

    public function getYearBorn() { return $this->yearBorn; }
    public function setYearBorn($yearBorn) { $this->yearBorn = $yearBorn; }

    public function getFullName() { return $this->firstname." ".$this->secondName.PHP_EOL; }
}