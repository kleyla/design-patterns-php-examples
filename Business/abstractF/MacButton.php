<?php
require_once("Business/abstractF/ButtonA.php");

class MacButton implements ButtonA
{
    public function render()
    {
        return "<button class='btn-mac'>Boton Mac</button>";
    }
}
