<?php

class Singleton extends Business
{

    public function __construct()
    {
        // echo "Singleton class";
        parent::__construct();
    }

    public function singleton()
    {
        // echo "Singleton main";
        require_once("Business/singleton/Database.php");
        $db1 = Database::getInstance();
        $db2 = Database::getInstance();

        if ($db1 === $db2) {
            $response = "Singleton funciona, ambas variables contienen la misma instancia.";
        } else {
            $response = "Singleton fallo, las variables son diferentes instancias.";
        }
        $data["pattern"] = "Singleton";
        $data["response"] = $response;
        $data["clase"] = get_class($db1);

        $this->getView('singleton/index', $data);
    }
}
