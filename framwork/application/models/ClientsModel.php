<?php

namespace application\models;

use application\core\Model;
use application\core\Router;


class ClientsModel extends Model
{


    private static $jsonfile = [];
    protected $filenamePath = ROOT_DIR . '/data/clients/';


    public function getListClients()
    {
        $view = [];
        $id = Router::get('id');
        $dirs = array_slice(scandir(ROOT_DIR . '/data/clients/'), 2);
        $data = $this->getList($dirs);
        foreach ($data as $key => $value) {
            if ($value['id_lrs'] == $id) {
                $view [$key] = $value;

            }
        }
        return $view;

    }

}