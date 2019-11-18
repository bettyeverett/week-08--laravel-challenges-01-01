<?php

// ... your class here
class LightSwitch{

    // Setting the property of the switch $on to false, to start with it off
    private $on = false;

    // Creating a function to turn it on (set it to true)
    public function turnOn()
    {
        $this->on = true;
    }

    // Creating a function to turn it off (set it to false)
    public function turnOff()
    {
        $this->on = false;
    }

    // Creating a function to check whether switch is on or off
    public function isOn()
    {
        return $this->on;
    }

}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(false)

// you can turn it on
$lightSwitch->turnOn();
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff();
var_dump($lightSwitch->isOn()); // bool(false)