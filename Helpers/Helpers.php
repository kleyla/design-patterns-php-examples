<?php
function base_url()
{
    return BASE_URL;
}
function media()
{
    return BASE_URL . "assets/";
}
function headerAdmin($data = "")
{
    $view_header = "Vista/template/header_admin.php";
    require_once($view_header);
}
function footerAdmin($data = "")
{
    $view_footer = "Vista/template/footer_admin.php";
    require_once($view_footer);
}
function navAdmin($data = "")
{
    $view_nav = "Vista/template/nav_admin.php";
    require_once($view_nav);
}
function headerPublic($data = "")
{
    $view_header = "Vista/template/header_public.php";
    require_once($view_header);
}
function footerPublic($data = "")
{
    $view_footer = "Vista/template/footer_public.php";
    require_once($view_footer);
}

function dep($data)
{
    $format = print_r("<pre>");
    $format .= print_r($data);
    $format .= print_r("</pre>");
    return $format;
}
