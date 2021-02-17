<?php
require_once("Business/factoryM/Dialog.php");
require_once("Business/factoryM/Button.php");
require_once("Business/factoryM/HtmlButton.php");

// Creadora concreta
class WebDialog extends Dialog
{
    public function factoryMethod(): Button
    {
        return new HtmlButton();
    }
}
