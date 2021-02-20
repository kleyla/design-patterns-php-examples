<?php
require_once("Business/facade/VideoConverterFacade.php");

class FacadeClient extends Business
{

    public function facade()
    {
        $data["pattern"] = "Facade";
        $data["script"] = "facade/script.js";
        $this->getView("facade/index", $data);
    }

    public function convert()
    {
        $filename = strClean($_POST['filename']);
        $format = strClean($_POST["format"]);

        if ($filename != "" && $format != "") {
            $convertor = new VideoConverterFacade();
            $mp4 = $convertor->converter($filename, $format);
            $data = $mp4->save();

            $arrResponse = array('status' => true, 'data' => $data);
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
    }
}
