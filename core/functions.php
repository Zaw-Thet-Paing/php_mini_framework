<?php

function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}

function view($name, array $data = [])
{
    extract($data);
    require "./views/$name.view.php";
}

function show_error_logs()
{
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}