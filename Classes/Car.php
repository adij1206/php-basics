<?php

class Car {
    private $brand;
    private $color;
    public $vehicleType;

    // WE can assign default value as well if we are not receiving 
    // the values in the constructor parameter
    public function __construct($brand, $color = "none") 
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->vehicleType = "car";
    }

    // Getter and Setter
    public function getColor() {
        return $this->color;
    }

    
    public function setColor($color) {
        $this->color = $color;
    }
}

$car1 = new Car("Volve", "Green");
echo "<br>" . $car1->vehicleType;

$car2 = new Car("BMW");
echo "<br>" . $car2->vehicleType;