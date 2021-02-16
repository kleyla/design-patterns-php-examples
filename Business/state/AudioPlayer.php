<?php
require_once("Business/state/StatePlayer.php");

class AudioPlayer
{
    private $state;

    public function __construct(StatePlayer $state)
    {
        $this->transitionTo($state);
    }
    public function getState()
    {
        return get_class($this->state);
    }
    public function transitionTo(StatePlayer $state): string
    {
        $to = get_class($state);
        $this->state = $state;
        $this->state->setContext($this);
        return $to;
    }

    public function lock()
    {
        return $this->state->clickLock();
    }
    public function play()
    {
        return $this->state->clickPlay();
    }
    public function next()
    {
        return $this->state->clickNext();
    }
    public function previous()
    {
        return $this->state->clickPrevious();
    }

    // Un estado puede invocar algunos métodos del servicio en el contexto.
    public function startPlayback()
    {
        # code...
    }
    public function stopPlayback()
    {
        # code...
    }
    public function nextSong()
    {
        # code...
    }
    public function previousSong()
    {
        # code...
    }
    public function fastForward()
    {
        # code...
    }
    public function rewind()
    {
        # code...
    }
}
