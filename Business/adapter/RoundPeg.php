<?php

class RoundPeg
{

    private $radius;

    public function __construct($radius)
    {
        // echo "RoundPeg";
        $this->radius = $radius;
    }
    public function getRadius()
    {
        return $this->radius;
    }
}
