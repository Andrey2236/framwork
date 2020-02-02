<?php
require 'application/lib/Dev.php';

use application\core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    if (file_exists($path)) {
        require $path;
    }
});

define('ROOT_DIR', __DIR__);

session_start();

$router = new Router;
$router->run();
