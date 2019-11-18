<?php

// ... your classes here
class Address
{
    // Setting properties
    private $street;
    private $postcode;
    private $town;

    // Setting parameters of class
    public function __construct($street, $postcode, $town)
    {
        $this->street = $street;
        $this->postcode = $postcode;
        $this->town = $town;
    }

    // Creating function to call the full address
    public function fullAddress()
    {
        // Passing all properties into an array, so that we can use implode
        $array = array($this->street, $this->town, $this->postcode);
        $neatAddress = implode(", ", $array); // Setting implode to display the array with a comma and space in between
        return $neatAddress;
    }

    // Setting functions to make it possible to set the address to something different
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    public function setTown($town)
    {
        $this->town = $town;
        return $this;
    }
}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
var_dump($address->fullAddress()); // string(34) "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
// using chaining
$address->setStreet("12 Cantelope Way")
        ->setPostcode("SW5 8RQ")
        ->setTown("Swansea");

// logs the new full address neatly
var_dump($address->fullAddress()); // string(34) "12 Cantelope Way, SW5 8RQ, Swansea"