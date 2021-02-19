<?php
require_once("Business/prototype/BookPrototype.php");

class PHPBookPrototype extends BookPrototype
{

    public function __construct()
    {
        $this->topic = "PHP";
    }

    public function clonar()
    {
        return clone $this;
    }
}
