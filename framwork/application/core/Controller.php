<?php

namespace application\core;

use application\core\View;

abstract class Controller
{
    public $route;
    public $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);

    }

    public static function creatingPostArr()
    {
        $post = [];
        foreach ($_POST as $key => $value) {
            $post[] = $key;
            $post[] = $value;
        }

        return $post;
    }

    public function getPostParam($data)
    {
        if (isset($_POST[$data])) {
            return $_POST[$data];
        } else {
            return null;
        }
//          $post = [];
//          foreach ($_POST as $key => $value){
//              $post += [$key => $value];
//          }
//          return $post[$data];
    }


    static function forwarding($location)
    {


            header('Location:' . $location);


    }

    static function isValidate($data)
    {

        $error = [];
        $error[0] = '';
        $error[1] = '';
        $error[2] = '';
        $i = 0;
        if (isset($_POST['submit'])) {
            foreach ($data as $key => $value) {
                if ($value != '') {
                    echo '';
                } else {
                    $error[$i] = 'Нужно заполнить и это поле тоже!';
                }
                $i++;
            }
        }
        return $error;
    }
}
