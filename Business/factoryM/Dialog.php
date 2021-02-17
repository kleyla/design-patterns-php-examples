<?php
require("Business/factoryM/Button.php");

// Clase creadora
abstract class Dialog
{
    abstract public function factoryMethod(): Button;

}
