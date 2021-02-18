<?php
require_once("Business/builder/Builder.php");

class Directora
{
    private $builder;

    public function setBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }
    public function constructSportsCar()
    {
        // $this->builder->;
        // $this->builder = new CarBuilder();
        $this->builder->setSeats(2);
        $this->builder->setEngine("Deportivo");
        $this->builder->setTripComputer(true);
        $this->builder->setGPS(true);
    }
    public function constructSUV()
    {
        $this->builder->setSeats(4);
        $this->builder->setEngine("SUV");
        $this->builder->setTripComputer(false);
        $this->builder->setGPS(true);
    }
}
