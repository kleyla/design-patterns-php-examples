<?php
require_once("Business/templateM/GameAI.php");

class OrcoAI extends GameAI
{
    // <span class='concret'></span>

    protected function buildStructures(): string
    {
        return "<span class='concret'>ConcreteClass OrcoAI dice: Alistando la estructura... <br></span>";
    }

    protected function buildUnits(): string
    {
        return "<span class='concret'>ConcreteClass1 OrcoAI dice: Alistando las unidades... <br></span>";
    }
    protected function sendScouts(): string
    {
        return "<span class='concret'>ConcreteClass1 OrcoAI dice: Alistando los exploradores... <br></span>";
    }
    protected function sendWarriors(): string
    {
        return "<span class='concret'>ConcreteClass1 OrcoAI dice: Alistando los guerreros... <br></span>";
    }
}
