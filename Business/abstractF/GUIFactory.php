<?php
require_once("Business/abstractF/ButtonA.php");
require_once("Business/abstractF/Checkbox.php");

interface  GUIFactory
{
    public function createButton(): ButtonA;
    public function createCheckbox(): Checkbox;
}
