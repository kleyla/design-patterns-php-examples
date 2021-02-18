<?php
require_once("Business/abstractF/ButtonA.php");

class WinButton implements ButtonA
{
    public function render()
    {
        return "<button class='btn-windows'>Boton Windows</button>";
    }
}
