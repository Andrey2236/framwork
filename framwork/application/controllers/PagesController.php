<?php


namespace application\controllers;

use application\core\Controller;
use application\core\Router;


class PagesController  extends Controller
{
    public function showAction()
    {
        $id = Router::get('id');
        $this->view->render('def','pages', ['id' => $id]);
    }
}