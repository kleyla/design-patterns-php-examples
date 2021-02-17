<?php
require_once("Business/factoryM/Button.php");

// Producto Concreto
class WindowsButton implements Button
{
    public function render(): string
    {
        return "<button class='btn-windows'>Boton Windows</button>";
    }

    public function onClick(): string
    {
        return "Click en el Boton de windows";
    }
}
