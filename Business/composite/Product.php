<?php
require_once("Business/composite/OrderComponent.php");

class Product extends OrderComponent
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function operation(): string
    {
        return "Producto: " . $this->name;
    }
}
