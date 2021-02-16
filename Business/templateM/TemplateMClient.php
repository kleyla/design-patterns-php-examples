<?php
require_once("Business/templateM/GameAI.php");
require_once('Business/templateM/MonsterAI.php');
require_once('Business/templateM/OrcoAI.php');

class TemplateMClient extends Business
{
    public function __construct()
    {
        echo "Template Method class <br>";
        // parent::__construct();
    }

    public function templateM()
    {
        $data["pattern"] = "Template Method";
        $arr =  $this->monster();
        $data["data-monster"] = $arr;
        $arr = $this->orco();
        $data["data-orco"] = $arr;

        $this->getView("templateM/index", $data);
    }

    public function template(GameAI $game): array
    {
        echo "Template con " . get_class($game) . "<br>";
        $data = $game->templateMethod();
        return $data;
    }
    public function monster(): array
    {
        return  $this->template(new MonsterAI());
    }

    public function orco(): array
    {
        return $this->template(new OrcoAI());
    }
}
