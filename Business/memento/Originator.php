<?php
require_once("Business/memento/Memento.php");
require_once("Business/memento/ConcreteMemento.php");

class Originator
{
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
        echo "Mi estado inicia es: " . $this->state . "<br>";
    }
    public function save(): Memento
    {
        return new ConcreteMemento($this->state);
    }
    public function restore(ConcreteMemento $memento): void
    {
        $this->state = $memento->getState();
        echo "Originator: Mi estado fue cambiado a " . $this->state . "<br>";
    }

    public function doSomething(): void
    {
        echo "Originator: I'm doing something important <br>";
        $this->state = $this->generateRandomString(30);
        echo "Originator: and my state has changed to: {$this->state} <br>";
    }

    private function generateRandomString(int $length = 10): string
    {
        return substr(
            str_shuffle(
                str_repeat(
                    $x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    ceil($length / strlen($x))
                )
            ),
            1,
            $length,
        );
    }
}
