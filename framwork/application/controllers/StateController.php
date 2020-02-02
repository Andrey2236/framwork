<?php


namespace application\controllers;

use application\core\Controller;
use application\core\Router;
use application\models\StateModel;


class StateController extends Controller
{
    public function showAction()
    {
        $id = Router::get('id');
        $listOfState = new StateModel;
        $data = $listOfState->getListState();
        $this->view->render('def','state',['id' => $id, 'dataState' => $data]);
    }
}