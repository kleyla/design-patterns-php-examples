<?php

abstract class BookPrototype
{
    public $title;
    public $topic;

    // public function __construct(ShapePrototype $shape)
    // {
    //     $this->x = $shape->x;
    //     $this->y = $shape->y;
    //     $this->color = $shape->color;
    // }

    abstract  public function clonar();

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getTopic()
    {
        return $this->topic;
    }
    public function getBook()
    {
        return "Titulo: " . $this->title . "<br>Topic: " . $this->topic . "<br>";
    }
}
