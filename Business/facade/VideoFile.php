<?php

class VideoFile
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getFileName()
    {
        return $this->name;
    }
}
