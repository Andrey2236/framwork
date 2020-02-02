<?php

namespace application\core;

use application\core\View;

class Router
{
    protected static $instance;
    static $data = [];
    protected $routes = [];
    protected $params = [];


    public function __construct()
    {
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        };
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
            return self::$instance;
        }
    }

    static function get($id)
    {
        return self::$data[$id];
    }



    public function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        preg_match('/(?<id>[0-9]+$)/', $url, $match);

        // static::$id = $match['id'];
        //var_dump(static::$id);


        foreach ($this->routes as $route => $params) {
            //   var_dump($route, 'dfd', $url);
            if ($this->matchRoute($route, $url)) {
                $this->routes;

                $this->params = $params;
//                $route = str_replace('{', '([0-9]+)', $this->routes);
//                var_dump($route);
                return true;
            }
        }
        return false;
    }

    public function matchRoute($route, $url)
    {
        $route = substr($route, 2, -2);
        $explodeRoute = explode('/', $route);
        $explodeUrl = explode('/', $url);
        $dataRoute = [];


        foreach ($explodeRoute as $key => $part) {
            if (strpos($part, '{') !== false) {
                $keyRoute = trim($part, '{}');
                $dataRoute[$keyRoute] = $explodeUrl[$key];
            } else if ($explodeUrl[$key] != $part) {
                return false;
            }

        }
        self::$data = $dataRoute;

//         var_dump(gettype($dataRoute[$keyRoute]));
//
//
        return true;

    }


    public function run()
    {
        if ($this->match()) {
            $path = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
            if (class_exists($path)) {
                $action = $this->params['action'] . 'Action';

                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();

                } else {
                    View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
        } else {
            View::errorCode(404);
        }
    }

}
