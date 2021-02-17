<?php
require_once("Business/factoryM/Dialog.php");
require_once("Business/factoryM/WebDialog.php");
require_once("Business/factoryM/WindowsDialog.php");

class FactoryMClient extends Business
{

    protected $dialog;

    public function factoryM()
    {
        $data["pattern"] = "Factory Method";
        $data["script"] = "factoryM/script.js";

        $this->getView("factoryM/index", $data);
    }
    public function buttonWindows()
    {
        $this->initializeWindowsDialog();
        $data = $this->createButton();

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function buttonWeb()
    {
        $this->initializeWebDialog();
        $data = $this->createButton();

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function initializeWindowsDialog()
    {
        $this->dialog = new WindowsDialog();
    }
    public function initializeWebDialog()
    {
        $this->dialog = new WebDialog();
    }

    public function createButton()
    {
        $button = $this->dialog->factoryMethod();
        return $button->render();
    }
}
