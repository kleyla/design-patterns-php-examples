<?php
require_once("Business/state/StatePlayer.php");
require_once("Business/state/LockedState.php");
require_once("Business/state/ReadyState.php");

class PlayingState extends StatePlayer
{
    public function clickLock(): array
    {
        $arr["from"] = $this->context->getState();
        $arr['to'] =  $this->context->transitionTo(new LockedState());
        $arr["estado"] = "locked...";
        return $arr;
    }
    public function clickPlay(): array
    {
        $this->context->stopPlayback();
        $arr["from"] = $this->context->getState();
        $arr['to'] = $this->context->transitionTo(new ReadyState());
        $arr["estado"] = "stop playing... ready...";
        return $arr;
    }
    public function clickNext(): array
    {
        $this->context->nextSong();
        $arr["from"] = $this->context->getState();
        $arr["estado"] = "next...";
        return $arr;
    }
    public function clickPrevious(): array
    {
        $this->context->previousSong();
        $arr["from"] = $this->context->getState();
        $arr["estado"] = "previous...";
        return $arr;
    }
}
