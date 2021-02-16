<?php
require_once("Business/state/StatePlayer.php");
require_once("Business/state/LockedState.php");
require_once("Business/state/PlayingState.php");

class ReadyState extends StatePlayer
{
    public function clickLock(): array
    {
        $arr["from"] = $this->context->getState();
        $arr['to'] = $this->context->transitionTo(new LockedState());
        $arr["estado"] = "locked...";
        return $arr;
    }
    public function clickPlay(): array
    {
        $arr["from"] = $this->context->getState();
        $arr['to'] = $this->context->transitionTo(new PlayingState());
        $arr["estado"] = "playing...";
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
