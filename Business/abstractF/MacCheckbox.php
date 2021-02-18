<?php
require_once("Business/abstractF/Checkbox.php");

class MacCheckbox implements Checkbox
{

    public function render()
    {
        return '<input type="checkbox" id="checkbox1" name="checkbox1"><label for="checkbox1" class="checkbox-mac">Checkbox Mac</label><br>';
    }
}
