<?php
require_once("Business/strategy/ContextStrategy.php");
require_once("Business/strategy/Ascendent.php");
require_once("Business/strategy/Descendent.php");

class Strategy extends Business
{
    private $context;

    public function __construct()
    {
        // echo "Strategy class";
        parent::__construct();
    }
    public function strategy()
    {
        $data["asc"] = $this->asc();
        $data['desc'] = $this->desc();
        $this->getView("strategy/index", $data);
    }
    public function asc()
    {
        $arr = ["d", "e", "a", "b", "c"];
        $this->context = new ContextStrategy(new Ascendent());
        // echo get_class($this->context);
        $order =  $this->context->resolv($arr);
        // dep($order);
        return $order;
    }
    public function desc()
    {
        $arr = ["d", "e", "a", "b", "c"];
        $this->context = new ContextStrategy(new Descendent());
        // echo get_class($this->context);
        $order =  $this->context->resolv($arr);
        // dep($order);
        return $order;
    }
}
