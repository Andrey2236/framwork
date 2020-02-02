<?php

namespace application\models;

use application\core\Model;
use application\core\Router;

class  UsersModel extends Model
{

    private static $jsonfile = [];
    protected $filenamePath = ROOT_DIR . '/data/users/';



}