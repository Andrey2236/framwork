<?php

namespace application\controllers;


use application\core\Controller;
use application\core\Router;
use application\models\LrsModel;

class MainController extends Controller
{

    public function indexAction()
    {
        $listOfLrs = new LrsModel;
        $data2 = $listOfLrs->getList();
        $this->view->render('def', 'lrs', ['dataLRS' => $data2]);
    }

    public function addAction()
    {
        $location = '/';
        $lrsAdd = new LrsModel;
        $newPost = [
            'id' => $this->getPostParam('id'),
            'name' => $this->getPostParam('name'),
            'description' => $this->getPostParam('description')
        ];

        $error = self::isValidate($newPost);


        $this->view->render('def', 'add-lrs', ['error' => $error]);


        if (!isset($newPost['id']) || ($newPost['id'] == '') || ($newPost['name'] == '') || ($newPost['description'] == '')) {
            echo '';
        } else {
            $lrsAdd->add($newPost);
            self::forwarding($location, $newPost);
        }


        //$this->view->render('def', 'add-lrs', ['error' => $error]);
        //$lrsAdd->add($newPost);
        //self::forwarding($location);

    }


    public function editAction()
    {
        $id = Router::get('id');
        $location = '/';
        $editLrs = new LrsModel;


        $data = [
            'id' => $this->getPostParam('id'),
            'name' => $this->getPostParam('name'),
            'description' => $this->getPostParam('description')
        ];
        $check = $editLrs->check($id);
        $this->view->render('def', 'lrs-edit', ['id' => $id, 'all' => $check]);



        if (!isset($data['id']) || ($data['id'] == '') || ($data['name'] == '') || ($data['description'] == '')) {
            echo '';
        } else {
            $editLrs->edit($data, $id);
            self::forwarding($location);
        }


    }


    public function deleteAction()
    {
        $id = Router::get('id');
        $location = '/';
        $this->view->render('def', 'lrs', ['id' => $id]);
        $elementLrs = new LrsModel;
        $elementLrs->delete($id);
        self::forwarding($location);

    }
}