<?php

namespace application\controllers;


use application\core\Controller;
use application\core\Router;
use application\models\ClientsModel;

class ClientsController extends Controller
{
    public function showAction()
    {
        $id = Router::get('id');
        $listOfClients =  new ClientsModel;
        $data = $listOfClients->getListClients();
        $this->view->render('def','клиенты', ['id' => $id, 'dataClients' => $data]);
    }

    public function addAction()
    {
        $id = Router::get('id');
        $location = '/pages/'. $id .'/clients/show';
        $clientsAdd = new ClientsModel;


        $newPost = [
            'id' => $this->getPostParam('id'),
            'login' => $this->getPostParam('login'),
            'password' => $this->getPostParam('password'),
            'id_lrs' => $id
        ];
        $error = self::isValidate($newPost);

        $this->view->render('def', 'add-lrs', ['error' => $error]);




        if (!isset($newPost['id']) || ($newPost['id'] == '') || ($newPost['login'] == '') || ($newPost['password'] == '')) {
            echo '';
        } else {
            $clientsAdd->add($newPost);
            self::forwarding($location);
        }




    }
}