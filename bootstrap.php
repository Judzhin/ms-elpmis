<?php

/**
 * 
 */
define('DS', DIRECTORY_SEPARATOR);
$autoload = __DIR__ . str_replace('/', DS, '/vendor/autoload.php'); // for Windows

if (file_exists($autoload)) {
    $loader = include $autoload;
}

ini_set('display_errors', true);


