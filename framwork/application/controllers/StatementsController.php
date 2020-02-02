<?php

namespace application\controllers;

use application\core\Controller;
use application\core\Router;
use application\models\StatementsModel;


class StatementsController extends Controller
{
    public function showAction()
    {
        $id = Router::get('id');
        $listOfState =  new StatementsModel;
        $data2 = $listOfState->getListStatements();
        $this->view->render('def','Statements', ['id' => $id, 'dataStatements' => $data2]);
    }
}