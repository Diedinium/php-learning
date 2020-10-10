<?php

class Author extends Person
{
    public $penName = "James S A Corey";

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

    protected function getCompleteName() { return $this->firstname." ".$this->secondName." a.k.a ".$this->penName; }

    public function returnCompleteName() { return $this->getCompleteName(); }
}