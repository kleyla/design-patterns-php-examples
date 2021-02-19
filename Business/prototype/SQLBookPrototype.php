<?php
require_once("Business/prototype/BookPrototype.php");

class SQLBookPrototype extends BookPrototype
{

    public function __construct()
    {
        $this->topic = "SQL";
    }

    public function clonar()
    {
        return clone $this;
    }
}
