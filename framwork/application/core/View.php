<?php

namespace application\core;


    class   View
{

    public $path;
    public $route;


    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    public function render($template, $title, $vars = [])
    {
        extract($vars);
        if (file_exists('application/views/'.$this->path.'.php')) {
            ob_start();
            require 'application/views/'.$this->path.'.php';
            $content = ob_get_clean();
            require 'application/views/layouts/'.$template.'.php';
        } else {
            echo 'вид не найден: ' . $this->path;
        }
    }

    public function redirect($url){
        header('location'.$url);
        exit;
    }
    public static function errorCode($code)
    {
        http_response_code($code);
        $path = 'application/views/errors/' . $code . '.php';
        if (file_exists($path)){
            require $path;
        }
        exit;
    }

}