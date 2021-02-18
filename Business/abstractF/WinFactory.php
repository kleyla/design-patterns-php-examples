<?php
require_once("Business/abstractF/GUIFactory.php");
require_once("Business/abstractF/ButtonA.php");
require_once("Business/abstractF/Checkbox.php");
require_once("Business/abstractF/WinButton.php");
require_once("Business/abstractF/WinCheckbox.php");

class WinFactory implements GUIFactory
{
    public function createButton(): ButtonA
    {
        return new WinButton();
    }
    public function createCheckbox(): Checkbox
    {
        return new WinCheckbox();
    }
}
