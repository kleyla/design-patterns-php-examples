<?php

abstract class GameAI
{
    // El método plantilla define el esqueleto de un algoritmo.

    final public function templateMethod(): array
    {
        $data = [];
        array_push($data, $this->collectResources());
        array_push($data, $this->buildStructures());
        array_push($data, $this->getReady());
        array_push($data, $this->hook1());
        array_push($data, $this->buildUnits());
        array_push($data, $this->attack());
        array_push($data, $this->sendScouts());
        array_push($data, $this->sendWarriors());
        array_push($data, $this->hook2());
        return $data;
    }


    // Estas operaciones ya tienen implementacion
    // <span class='abstract'></span>
    protected function collectResources(): string
    {
        return "<span class='abstract'>AbstractClass dice: Recolectando recursos... <br></span>";
    }

    protected function getReady(): string
    {
        return "<span class='abstract'>AbstractClass dice: El presonaje se esta alistando... <br></span>";
    }

    protected function attack(): string
    {
        return "<span class='abstract'>AbstractClass dice: Atacando! <br></span>";
    }


    // Estas operaciones seran implementadas en las subclases

    abstract protected function buildStructures(): string;

    abstract protected function buildUnits(): string;

    abstract protected function sendScouts(): string;

    abstract protected function sendWarriors(): string;


    /**
     * Estos son hooks (ganchos): las Subclasses pueden sobreescribirlas, pero no es obligatorio
     * since the hooks already have default (but empty) implementation. Hooks
     * provide additional extension points in some crucial places of the
     * algorithm.
     */
    protected function hook1(): string
    {
        return "Desde Hook1 Abstract <br>";
    }

    protected function hook2(): string
    {
        return "Desde Hook2 Abstract <br>";
    }
}
