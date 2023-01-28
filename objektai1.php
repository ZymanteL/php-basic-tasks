<?php

// Create a class called Person that has a constructor that sets the person's name and age when the object is created. A person should have an introduce method that prints information about it. One should also have a destructor that prints "By from [name]" before the object is deleted (when the program has finished).

class Person {
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function introduce () {
        return 'Your information: ' . $this->name . ', ' . $this->age .'.' . PHP_EOL;
    }

    function __destruct()
    {
        echo 'By from ' . $this->name . "." . PHP_EOL;
    }
}

$person = new Person('Petras', 22);
echo $person->introduce();


