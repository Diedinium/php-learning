<?php

class Person 
{
    const AVG_LIFE_EXPECT = 80;

    public $firstname = "Jake";
    public $secondName = "Hall";
    public $age = 21;
    private $yearBorn = 1999;

    public function __construct() {}

    public static function setValues($fname, $sname, $passage) {
        $instance = new static();
        $instance->firstname = $fname;
        $instance->secondName = $sname;
        $instance->age = $passage;
        $instance->yearBorn = date("Y") - $passage;
        return $instance;
    }

    public function getYearBorn() { return $this->yearBorn; }
    public function setYearBorn($yearBorn) { $this->yearBorn = $yearBorn; }
}

$myPerson = Person::setValues("Isaac", "Hall", 11);
echo $myPerson->firstname."\n";

$myPerson->firstname = "Tobi";
echo $myPerson->firstname."\n";
// Scope resolution operator
echo $myPerson::AVG_LIFE_EXPECT."\n";
echo Person::AVG_LIFE_EXPECT."\n";

print_r($myPerson)."\n";
echo $myPerson->getYearBorn()."\n";
$myPerson->setYearBorn(2002);
echo $myPerson->getYearBorn()."\n";