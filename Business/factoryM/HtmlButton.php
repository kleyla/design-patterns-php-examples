<?php
require_once("Business/factoryM/Button.php");

// Producto Concreto
class HtmlButton implements Button
{
    public function render(): string
    {
        return "<button class='btn-html'>Boton Web</button>";
    }

    public function onClick(): string
    {
        return "Click en el Boton de html";
    }
}
