<?php
require_once("Business/builder/Manual.php");

class CarManualBuilder implements Builder
{
    private $manual;

    public function __construct()
    {
        $this->reset();
    }
    // producto en blanco
    public function reset()
    {
        $this->manual = new Manual();
    }
    public function setSeats($cantidad)
    {
        $this->manual->parts[] = "Documenta las características de " . $cantidad . " del auto" . "<br>";
    }
    public function setEngine($tipo)
    {
        $this->manual->parts[] = "Añade instrucciones del motor de tipo: " . $tipo . "<br>";
    }
    public function setTripComputer($tiene)
    {
        if ($tiene) {
            $this->manual->parts[] = "Añade instrucciones de la computadora de navegación" . "<br>";
        }
    }
    public function setGPS($tiene)
    {
        if ($tiene) {
            $this->manual->parts[] = "Añade instrucciones del GPS" . "<br>";
        }
    }
    public function getProduct(): Manual
    {
        $manual = $this->manual;
        $this->reset();
        return $manual;
    }
}
