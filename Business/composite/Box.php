<?php
require_once("Business/composite/OrderComponent.php");
// require_once("Business/composite/")

class Box extends OrderComponent
{
    protected $children;

    public function __construct($id)
    {
        $this->id = $id;
        $this->children = new \SplObjectStorage();
    }
    public function add(OrderComponent $component): void
    {
        $this->children->attach($component);
        $component->setParent($this);
    }

    public function remove(OrderComponent $component): void
    {
        $this->children->detach($component);
        $component->setParent(null);
    }

    public function isComposite(): bool
    {
        return true;
    }

    public function operation(): string
    {
        $results = [];
        foreach ($this->children as $child) {
            $results[] = $child->operation();
        }

        return "CAJA: " . $this->id . " (" . implode("+", $results) . ")";
    }
}
