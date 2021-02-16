<?php
require_once("Business/state/StatePlayer.php");
require_once("Business/state/PlayingState.php");

class LockedState extends StatePlayer
{
    public function clickLock(): array
    {
        $arr["from"] = $this->context->getState();
        $arr['to'] =  $this->context->transitionTo(new PlayingState());
        $arr["estado"] = "playing...";
        return $arr;
    }
    public function clickPlay(): array
    {
        $arr["from"] = $this->context->getState();
        $arr['estado'] = "Bloqueado, no hace nada";
        return $arr;
    }
    public function clickNext(): array
    {
        $arr["from"] = $this->context->getState();
        $arr['estado'] = "Bloqueado, no hace nada";
        return $arr;
    }
    public function clickPrevious(): array
    {
        $arr["from"] = $this->context->getState();
        $arr['estado'] = "Bloqueado, no hace nada";
        return $arr;
    }
}
