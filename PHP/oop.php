<?php

class Car
{
    // Member variables
    public $color;
    public $make;

    public function __construct($clr, $mke)
    {
        $this->color = $clr;
        $this->make = $mke;
    }


    // Member method(s)
    public function driving()
    {
        echo "The " . $this->color . " " . $this->make . " is driving";
    }
}

// Instance / Instantiate / Object creation
// $car = new Car();
// $car->color = "blue";
// $car->make = "Toyota";
// $car->driving();

// $car2 = new Car();

// $car2->color = 'black';
// $car2->make = "Honda";
// $car2->driving();


$car = new Car("White", "Suzuki");
$car->driving();


$car2 = new Car("Red", "Honda");
$car2->driving();
