<?php
require_once("Business/builder/Directora.php");
require_once("Business/builder/CarBuilder.php");
require_once("Business/builder/CarManualBuilder.php");

class BuilderClient extends Business
{

    public function builder()
    {
        $data["pattern"] = "Buider";
        $data["script"] = "builder/script.js";
        $this->getView("builder/index", $data);
    }
    public function getSportsCar()
    {
        // echo "Making.."; <br?
        $directora = new Directora();
        $buider = new CarBuilder();
        $directora->setBuilder($buider);
        $directora->constructSportsCar();
        $car = $buider->getProduct()->listParts();
        $data = "<div class='text-blue'>" . $car . "</div>";

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function getSUVCar()
    {
        // echo "Making.."; <br?
        $directora = new Directora();
        $buider = new CarBuilder();
        $directora->setBuilder($buider);
        $directora->constructSUV();
        $car = $buider->getProduct()->listParts();
        $data = "<div class='text-red'>" . $car . "</div>";

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function getSportsCarManual()
    {
        $directora = new Directora();
        $buider = new CarManualBuilder();
        $directora->setBuilder($buider);
        $directora->constructSportsCar();
        $manual = $buider->getProduct()->listParts();
        $data = "<div class='text-blue'>" . $manual . "</div>";

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function getSUVCarManual()
    {
        // echo "Making.."; <br?
        $directora = new Directora();
        $buider = new CarManualBuilder();
        $directora->setBuilder($buider);
        $directora->constructSUV();
        $manual = $buider->getProduct()->listParts();
        $data = "<div class='text-red'>" . $manual . "</div>";

        $arrResponse = array('status' => true, 'data' => $data);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
}
