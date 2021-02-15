<?php
require_once("Business/templateM/GameAI.php");

class MonsterAI extends GameAI
{
    // <span class='concret'></span>
    protected function buildStructures(): string
    {
        return "<span class='concret'>ConcreteClass MonsterAI dice: Alistando la estructura... <br></span>";
    }

    protected function buildUnits(): string
    {
        return "<span class='concret'>ConcreteClass1 MonsterAI dice: Alistando las unidades... <br></span>";
    }
    protected function sendScouts(): string
    {
        return "<span class='concret'>ConcreteClass1 MonsterAI dice: Alistando los exploradores... <br></span>";
    }
    protected function sendWarriors(): string
    {
        return "<span class='concret'>ConcreteClass1 MonsterAI dice: Alistando los guerreros... <br></span>";
    }
    protected function hook1(): string
    {
        return "<span class='hook'>ConcreteClass1 MonsterAI dice: Alistando el hook1... <br></span>";
    }
}
