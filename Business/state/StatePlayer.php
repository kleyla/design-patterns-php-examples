<?php
require_once("Business/state/AudioPlayer.php");

abstract class StatePlayer
{

    protected $context;

    public function setContext(AudioPlayer $context)
    {
        $this->context = $context;
    }

    abstract public function clickLock(): array;
    abstract public function clickPlay(): array;
    abstract public function clickNext(): array;
    abstract public function clickPrevious(): array;
}
