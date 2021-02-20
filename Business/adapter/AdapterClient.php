<?php
require_once("Business/adapter/RoundHole.php");
require_once("Business/adapter/RoundPeg.php");
require_once("Business/adapter/SquarePeg.php");
require_once("Business/adapter/SquarePegAdapter.php");

class AdapterClient extends Business
{

    public function adapter()
    {
        $data["pattern"] = "Adapter";
        $data["script"] = "adapter/script.js";
        $this->getView("adapter/index", $data);
    }

    public function round()
    {
        $holeRadius = intval($_POST['holeRadius']);
        $pegRadius = intval($_POST["pegRadius"]);
        if ($holeRadius > 0 && $pegRadius > 0) {
            $hole = new RoundHole($holeRadius);
            $rpeg = new RoundPeg($pegRadius);

            if ($hole->fits($rpeg)) {
                $data = "Encaja!";
            } else {
                $data = "No encaja!";
            }
            $arrResponse = array('status' => true, 'data' => $data);
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
    }
    public function square()
    {
        $holeRadius = intval($_POST['holeRadius2']);
        $squareWidth = intval($_POST["squareWidth"]);
        if ($holeRadius > 0 && $squareWidth > 0) {
            $hole = new RoundHole($holeRadius);
            // $peg = new SquarePeg(8);

            $peg = new SquarePeg($squareWidth);
            $pegAdapter = new SquarePegAdapter($peg);
            // echo $pegAdapter->getRadius();
            if ($hole->fits($pegAdapter)) {
                $data = "Encaja!";
            } else {
                $data = "No encaja!";
            }
            $arrResponse = array('status' => true, 'data' => $data);
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
    }
}
