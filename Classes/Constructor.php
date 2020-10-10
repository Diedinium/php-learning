<?php

class Person 
{
    const AVG_LIFE_EXPECT = 80;

    public $firstname = "Jake";
    public $secondName = "Hall";
    public $age = 21;
    // Private variables cannot be inherited, can only be accessed in inherited classes via public/protected getters/setters.
    private $yearBorn = 1999;

    // PHP only allows one constructor, no method overloads are possible :( 
    // If constructor has values, they should have default values to still make static methods usable.
    public function __construct($firstname = "Default", $secondName = "Default", $age = 0) 
    {
        $this->firstname = $firstname;
        $this->secondName = $secondName;
        $this->age = $age;
        $this->yearBorn = date("Y") - $age;
    }

    // Example of using a static method that is part of the class to create an instance
    public static function createPerson($fname, $sname, $passage) {
        // Use "self" to access other static properties inside a class. And "parent" to access static properties from inherited class.
        $instance = new static();
        $instance->firstname = $fname;
        $instance->secondName = $sname;
        $instance->age = $passage;
        $instance->yearBorn = date("Y") - $passage;
        return $instance;
    }

    // Getters and setters
    public function getYearBorn() { return $this->yearBorn; }
    public function setYearBorn($yearBorn) { $this->yearBorn = $yearBorn; }

    public function getFullName() { return $this->firstname." ".$this->secondName.PHP_EOL; }
}

// Inheritance
class Author extends Person
{
    public $penName = "James S A Corey";

    // Static classes cannot rely on public/private/protected properties from the class - they must be self contained. This makes them useful
    // as helper methods, or in this case, to generate an instance of the author class.
    public static function createAuthor($fname, $sname, $age, $penName) {
        $instance = new static();
        $instance->firstname = $fname;
        $instance->secondName = $sname;
        $instance->age = $age;
        $instance->setYearBorn(date("Y") - $age);
        $instance->penName = $penName;
        return $instance;
    }

    public function getPenName() { return $this->penName.PHP_EOL; }

    // due to being a protected method, this cannot be accessed apart from within the class. This is a good way to make sure methods that should 
    // only be used internally aren't called from outside of the class.
    protected function getCompleteName() { return $this->firstname." ".$this->secondName." a.k.a ".$this->penName; }

    // Protected methods can be used as part of a public method like below, in order to use their values etc
    public function returnCompleteName() { return $this->getCompleteName(); }

    // Note that methods can be overridden, but the variables you are passing in cannot be changed on static members.
}

// Using a static method
$myPerson = Person::createPerson("Isaac", "Hall", 11);
$myPerson1 = new Person("Jake", "Hall", 21);

$myAuthor = Author::createAuthor("Mark", "Twain", 55, "Mark Twain");

print_r($myPerson);
print_r($myPerson1);

print_r($myAuthor);

echo $myAuthor->returnCompleteName();