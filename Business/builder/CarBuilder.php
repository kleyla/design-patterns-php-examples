<?php
require_once("Business/builder/Car.php");

// constructoras concretas
class CarBuilder implements Builder
{
    private $car;

    public function __construct()
    {
        $this->reset();
    }
    // producto en blanco
    public function reset()
    {
        $this->car = new Car();
    }
    public function setSeats($cantidad)
    {
        $this->car->parts[] = "Cantidad de asientos: " . $cantidad . "<br>";
    }
    public function setEngine($tipo)
    {
        $this->car->parts[] = "Instalar motor especifico tipo: " . $tipo . "<br>";
    }
    public function setTripComputer($tiene)
    {
        if ($tiene) {
            $this->car->parts[] = "Instala una computadora de navegacion" . "<br>";
        }
    }
    public function setGPS($tiene)
    {
        if ($tiene) {
            $this->car->parts[] = "Instala un GPS" . "<br>";
        }
    }
    public function getProduct(): Car
    {
        $car = $this->car;
        $this->reset();
        return $car;
    }
}
