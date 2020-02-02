<?php

namespace application\controllers;

use application\core\View;
use application\core\Controller;
use application\core\Router;
use application\models\UsersModel;

class UserController extends Controller
{

    public function indexAction()
    {

        $data = new UsersModel;
        $data2 = $data->getList();

        $this->view->render('def', 'User', ['dataUsers' => $data2]);
    }

    public function addAction()
    {
        $location = '/users/show';
        $usersAdd = new UsersModel;

//        $newPost = self::creatingPostArr();
        $newPost = [
            'id' => $this->getPostParam('id'),
            'login' => $this->getPostParam('login'),
            'pass' => $this->getPostParam('pass')
        ];
        $error = self::isValidate($newPost);
        $this->view->render('def', 'add-lrs', ['error' => $error]);



        if (!isset($newPost['id']) || ($newPost['id'] == '') || ($newPost['login'] == '') || ($newPost['pass'] == '')) {
            echo '';
        } else {
            $usersAdd->add($newPost);;
            self::forwarding($location);
        }

//        $data = $this->getPostParam('id');

    }

    public function editAction()
    {
        $id = Router::get('id');
        $location = '/users/show';
        $editUsers = new UsersModel();

        $newPost = [
            'id' => $this->getPostParam('id'),
            'login' => $this->getPostParam('login'),
            'pass' => $this->getPostParam('pass')
        ];

        $check = $editUsers->check($id);
        $this->view->render('def', 'Edit-User', ['id' => $id, 'all' => $check]);

        if (!isset($newPost['id']) || ($newPost['id'] == '') || ($newPost['login'] == '') || ($newPost['pass'] == '')) {
            echo '';
        } else {
            $editUsers->edit($newPost, $id);
            self::forwarding($location);
        }
    }


    public function deleteAction()
    {
        $id = Router::get('id');
        $location = '/users/show';
        $this->view->render('def', 'Edit-User');
        $elementUsers = new UsersModel();
        $elementUsers->delete($id);
        self::forwarding($location);

    }
}
