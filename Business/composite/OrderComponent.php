<?php

abstract class OrderComponent
{
    protected $id;
    protected $parent;

    public function setParent(?OrderComponent $parent)
    {
        $this->parent = $parent;
    }

    public function getParent(): OrderComponent
    {
        return $this->parent;
    }
    public function setId($id)
    {
        $this->id = $id;
    }


    public function isComposite(): bool
    {
        return false;
    }

    abstract public function operation(): string;
}
