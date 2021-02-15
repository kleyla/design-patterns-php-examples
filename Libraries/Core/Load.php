<?php

function reload($controller, $method, $params)
{
    // echo "Metodo" . $method;
    $file = $controller;
    $controller = ucwords($controller);
    $controllerFile = "Business/" . $file . "/" . $controller . ".php";
    // echo $controller;
    if (file_exists($controllerFile)) {
        // echo $controllerFile;
        require_once($controllerFile);
        $controller = new $controller();
        // echo $method;
        if (method_exists($controller, $method)) {
            $controller->{$method}($params);
        } else {
            echo "No existe el metodo";
            // require_once("Business/Errors.php");
        }
    } else {
        echo "No existe controllador";
        // require_once("Business/Errors.php");
    }
}

reload($controller, $method, $params);
