<?php

class Manual
{
    public $parts = [];

    public function listParts()
    {
        return "<b>Manual del auto:</b><br>" . implode(' ', $this->parts);
    }
}
