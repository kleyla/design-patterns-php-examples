<?php
require_once("Business/abstractF/GUIFactory.php");
require_once("Business/abstractF/ButtonA.php");
require_once("Business/abstractF/Checkbox.php");
require_once("Business/abstractF/MacButton.php");
require_once("Business/abstractF/MacCheckbox.php");

class MacFactory implements GUIFactory
{
    public function createButton(): ButtonA
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}
