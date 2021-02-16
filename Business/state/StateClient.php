<?php
require_once("Business/state/AudioPlayer.php");
require_once("Business/state/ReadyState.php");
require_once("Business/state/PlayingState.php");
require_once("Business/state/LockedState.php");

class StateClient extends Business
{

    private $player;

    public function __construct()
    {
        $this->player = new AudioPlayer(new ReadyState());
        parent::__construct();
    }

    public function state()
    {
        $data["pattern"] = "State";
        // $data["data"] = $arr;
        $data["script"] = "state/script.js";

        $this->getView("state/index", $data);
    }
    // $strNombre = strClean($_POST["txtNombre"]);

    public function update($currentState)
    {
        $file = "Business/state/" . $currentState . ".php";
        if (file_exists($file)) {
            $this->player = new AudioPlayer(new $currentState);
        }
    }
    public function pressLock()
    {
        $currentState = strClean($_POST["estado"]);
        $this->update($currentState);

        $arr = $this->player->lock();
        $arrResponse = array('status' => true, 'data' => $arr);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function pressPlay()
    {
        $currentState = strClean($_POST["estado"]);
        $this->update($currentState);

        $arr = $this->player->play();
        $arrResponse = array('status' => true, 'data' => $arr);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function pressNext()
    {
        $currentState = strClean($_POST["estado"]);
        $this->update($currentState);

        $arr = $this->player->next();
        $arrResponse = array('status' => true, 'data' => $arr);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
    public function pressPrevious()
    {
        $currentState = strClean($_POST["estado"]);
        $this->update($currentState);

        $arr = $this->player->previous();
        $arrResponse = array('status' => true, 'data' => $arr);
        echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
    }
}
