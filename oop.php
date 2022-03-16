<?php

class person
{
    public $name = 'John';
    protected $age = 12;

    public function __construct()
    {
        echo $this->age;
    }
    public function getName()
    {
        echo $this->name . "Doe";
    }
}

class customer extends person
{
    public function getAge()
    {
        echo $this->age;
    }
}
//instantiate
$person1 = new customer;
echo $person1->getName();
