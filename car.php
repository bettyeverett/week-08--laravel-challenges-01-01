<?php

// ... your class here
class Car
{

    private $make;
    private $numberPlate;
    private $mileage = 0;

    public function __construct($make, $numberPlate)
    {
        $this->make = $make;
        $this->numberPlate = $numberPlate;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getNumberPlate()
    {
        return $this->numberPlate;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function addJourney($miles)
    {
        $this->mileage += $miles; 
        return $this;
    }

}

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
var_dump($car->getNumberplate()); // string(8) "XY11 4TY"
var_dump($car->getMake()); // string(4) "Ford"
var_dump($car->getMileage()); // int(0)

// you can add journey
$car->addJourney(100);
var_dump($car->getMileage()); // int(100)

$car->addJourney(200);
var_dump($car->getMileage()); // int(300)