<?php

// interfaz constructora
interface Builder
{
    public function reset();
    public function setSeats($cantidad);
    public function setEngine($tipo);
    public function setTripComputer($tiene);
    public function setGPS($tiene);
}
