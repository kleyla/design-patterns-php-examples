<?php
require_once("Business/adapter/SquarePeg.php");

class SquarePegAdapter extends RoundPeg
{

    private $peg;

    public function __construct(SquarePeg $peg)
    {
        $this->peg = $peg;
    }

    public function getRadius()
    {
        return $this->peg->getWidth() * sqrt(2) / 2;
    }
}
