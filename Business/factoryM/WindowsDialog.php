<?php
require_once("Business/factoryM/Dialog.php");
require_once("Business/factoryM/Button.php");
require_once("Business/factoryM/WindowsButton.php");

// Creadora concreta
class WindowsDialog extends Dialog
{
    public function factoryMethod(): Button
    {
        return new WindowsButton();
    }
}
