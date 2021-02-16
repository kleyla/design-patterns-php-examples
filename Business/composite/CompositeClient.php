<?php
require_once("Business/composite/OrderComponent.php");
require_once("Business/composite/Box.php");
require_once("Business/composite/Product.php");

class CompositeClient extends Business
{
    public function __construct()
    {
        // 
    }
    public function composite()
    {
        $data["pattern"] = "Composite";
        $data["response"] = $this->adding();

        $this->getView("composite/index", $data);
    }

    public function start(OrderComponent $component)
    {
        return "Resultado " . $component->operation() . "<br>";
    }

    public function adding()
    {
        $box1 = new Box(1);
        $box2 = new Box(2);
        $box1->add($box2);
        $box2->add(new Product("Phone"));
        // $this->start($box1);

        // $box1->remove($box2);
        return  $this->start($box1);
    }
}
