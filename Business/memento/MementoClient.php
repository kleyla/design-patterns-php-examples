<?php
require_once("Business/memento/Originator.php");
require_once("Business/memento/Caretaker.php");

class MementoClient
{

    public function __construct()
    {
        echo "MementoClient";
    }

    public function exa()
    {
        $originator = new Originator("Super-duper-super-puper-super.");
        $caretaker = new Caretaker($originator);

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        $caretaker->backup();
        $originator->doSomething();

        echo "\n";
        $caretaker->showHistory();

        echo "\nClient: Now, let's rollback!\n\n";
        $caretaker->undo();

        echo "\nClient: Once more!\n\n";
        $caretaker->undo();
    }
}
