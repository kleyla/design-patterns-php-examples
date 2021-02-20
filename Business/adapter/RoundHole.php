<?php
require_once("Business/adapter/RoundPeg.php");

class RoundHole
{

    private $radius;

    public function __construct($radius)
    {
        // echo "RoundHole";
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }
    public function fits(RoundPeg $peg)
    {
        return $this->getRadius() >= $peg->getRadius();
    }
}
