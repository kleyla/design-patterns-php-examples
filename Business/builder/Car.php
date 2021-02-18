<?php

class Car
{
    public $parts = [];

    public function listParts()
    {
        return "<b>Descripcion del auto:</b><br>" . implode(' ', $this->parts);
    }
}
