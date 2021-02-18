<?php
require_once("Business/abstractF/GUIFactory.php");
require_once("Business/abstractF/WinFactory.php");
require_once("Business/abstractF/MacFactory.php");

class AbstractFClient extends Business
{
    protected $product;

    public function __construct()
    {
        // echo "Constructor";
    }
    public function abstractF()
    {
        $data["pattern"] = "Abstract Factory";
        $data["script"] = "abstractF/script.js";
        $this->getView("abstractF/index", $data);
    }
    public function renderWinButton()
    {
        $this->updateButton(new WinFactory());
        $data = $this->product->render();

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function renderMacButton()
    {
        $this->updateButton(new MacFactory());
        $data = $this->product->render();

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function renderWinCheckbox()
    {
        $this->updateCheckbox(new WinFactory());
        $data = $this->product->render();

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function renderMacCheckbox()
    {
        $this->updateCheckbox(new MacFactory());
        $data = $this->product->render();

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function updateButton(GUIFactory $factory)
    {
        $this->product = $factory->createButton();
    }
    public function updateCheckbox(GUIFactory $factory)
    {
        $this->product = $factory->createCheckbox();
    }
    // Pruebas
    public function createProducts(GUIFactory $factory)
    {
        $fact = new WinFactory();
        $product = $fact->createButton();

        echo $product->render();
    }
}
