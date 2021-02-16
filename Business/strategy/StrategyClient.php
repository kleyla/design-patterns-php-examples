<?php
require_once("Business/strategy/ContextStrategy.php");
require_once("Business/strategy/Ascendent.php");
require_once("Business/strategy/Descendent.php");

class StrategyClient extends Business
{
    private $context;

    public function __construct()
    {
        // echo "Strategy class";
        parent::__construct();
    }
    public function strategy()
    {
        $arr = ["d", "e", "a", "b", "c"];
        $data["pattern"] = "Strategy";
        $data["data"] = $arr;
        $data["script"] = "strategy/script.js";

        $this->getView("strategy/index", $data);
    }
    public function asc()
    {
        $arr = ["d", "e", "a", "b", "c"];
        $this->context = new ContextStrategy(new Ascendent());
        // echo get_class($this->context);
        $order =  $this->context->resolv($arr);
        // dep($order);

        $arrResponse = array('status' => true, 'data' => $order);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function desc()
    {
        $arr = ["d", "e", "a", "b", "c"];
        $this->context = new ContextStrategy(new Descendent());
        $order =  $this->context->resolv($arr);
        $arrResponse = array('status' => true, 'data' => $order);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
}
