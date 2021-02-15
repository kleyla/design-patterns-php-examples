<?php
function base_url()
{
    return BASE_URL;
}
function media()
{
    return BASE_URL . "assets/";
}

function headerPublic($data = "")
{
    $view_header = "Views/template/header.php";
    require_once($view_header);
}
function footerPublic($data = "")
{
    $view_footer = "Views/template/footer.php";
    require_once($view_footer);
}

function dep($data)
{
    $format = print_r("<pre>");
    $format .= print_r($data);
    $format .= print_r("</pre>");
    return $format;
}
