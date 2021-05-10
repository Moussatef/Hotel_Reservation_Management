<?php

spl_autoload_register("autoload");

function autoload($className)
{
    $path = '../classes/';
    $extension = '.class.php';
    $fileName = $path . $className . $extension;

    if (!file_exists($fileName)) {
        $path = "../classes/";
    }

    @include_once $fileName;
}
