<?php

class Database
{
    private static $instance;

    protected function __construct()
    {
        echo "DB conected!";
    }

    public static  function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }
}
