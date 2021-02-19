<?php
require_once("Business/prototype/PHPBookPrototype.php");
require_once("Business/prototype/SQLBookPrototype.php");

class PrototypeClient extends Business
{

    public function prototype()
    {
        $data["pattern"] = "Prototype";
        $data["script"] = "prototype/script.js";
        $this->getView("prototype/index", $data);
    }
    public function getPhpBooks()
    {
        $phpBookA = new PHPBookPrototype();
        $phpBookB = $phpBookA->clonar();

        $phpBookA->setTitle("PHP for dummies");
        $phpBookB->setTitle("PHP for babies");

        $data = "<div class='bg-blue'>" . $phpBookA->getBook() . "</div>" . "<div class='bg-red'>" . $phpBookB->getBook() . "</div>";

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }

    public function getSqlBooks()
    {
        $sqlBookA = new SQLBookPrototype();
        $sqlBookB = $sqlBookA->clonar();

        $sqlBookA->setTitle("SQL for dummies");
        $sqlBookB->setTitle("SQL for babies");

        $data = "<div class='bg-green'>" . $sqlBookA->getBook() . "</div>" . "<div class='bg-purple'>" . $sqlBookB->getBook() . "</div>";

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }

    public function exa()
    {
        // echo "method";
        $phpBook = new PHPBookPrototype();
        $sqlBook = new SQLBookPrototype();

        $phpBook1 = $phpBook->clonar();
        // if ($phpBook == $phpBook1) {
        //     echo "Son iguales";
        // } else {
        //     echo "No son iguales";
        // }
        $phpBook->setTitle("Php for dummies");
        echo $phpBook->getBook();

        $phpBook1->setTitle("PHP for babies");
        echo $phpBook1->getBook();
    }
}
