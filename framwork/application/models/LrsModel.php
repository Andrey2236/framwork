<?php

namespace application\models;

use application\core\Model;
use application\core\Router;


class LrsModel extends Model
{

    private static $jsonfile = [];
    protected $filenamePath = ROOT_DIR . '/data/lrs/' ;



//    public function getListLrs()
//    {
//        $dirs = array_slice(scandir(ROOT_DIR . '/data/lrs/'), 2);
//
////        foreach ($dirs as $key => $dir) {
////            if (is_dir(ROOT_DIR . '/data/lrs/' . $dir)) {
////                $fileLRS = array_slice(scandir(ROOT_DIR . '/data/lrs/'), 2);
//               return $this->getList($dirs);
//            }
////        }
////    }





//    public function addLrs($newPost)
//    {
//        $filenamePath = ROOT_DIR . '/data/lrs/';
//        $this->createLRS($filenamePath, $newPost);
//    }

//    public function createLRS($newPost)
//    {
//        if (!isset($newPost['id']) || ($newPost['id'] == '') || ($newPost['id'] == '') || ($newPost['id'] == '')) {
//            echo '';
//        } else {
//            mkdir(ROOT_DIR . '/data/lrs/' . $newPost['id'], 0777, true);
//            $this->add($newPost);
//           // file_put_contents($filenamePath . $newPost['id'] .'/'.$newPost['id'].'.json', json_encode($newPost));
//            mkdir(ROOT_DIR . '/data/lrs/' . $newPost['id'] . '/state', 0777, true);
//            mkdir(ROOT_DIR . '/data/lrs/' . $newPost['id'] . '/statements', 0777, true);
//            mkdir(ROOT_DIR . '/data/lrs/' . $newPost['id'] . '/clients', 0777, true);
//        }
//
//    }

//    public function editLrs($newPost)
//    {
//        $id = Router::get('id');
//        $filenamePath = ROOT_DIR . '/data/lrs/' . $id . '/';
//        self::edit($newPost,$id);
//        rename(__DIR__ . '/../config/dataLRS/' . $id . '/', __DIR__ . '/../config/dataLRS/' . $newPost[1]);
//        rename(__DIR__ . '/../config/dataLRS/' . $newPost[1] . '/' . $id . '.json',
//            __DIR__ . '/../config/dataLRS/' . $newPost[1] . '/' . $newPost[1] . '.json');
//    }
//
//    public function checklrs()
//    {
//        $id = Router::get('id');
//        $files = scandir(ROOT_DIR . '/data/lrs/' . $id);
//        if ($id !== '') {
//            foreach ($files as $key => $file) {
//                $wordJSON1 = stristr($file, '.');
//                $wordJSON2 = stristr($file, '.', true);
//                if ($wordJSON1 === '.json' && $id === $wordJSON2) {
//                    $getfile = file_get_contents(ROOT_DIR . '/data/lrs/' . $id . '/' . $file);
//                    return self::$jsonfile = json_decode($getfile, true);
//                }
//            }
//        }
//    }

//    public function deleteElementLrs()
//    {
//        $id = Router::get('id');
//        $path = ROOT_DIR . '/data/lrs/' . $id;
//        self::deleteLRS($path);
//    }
//
//
//    static function deleteLRS($path)
//    {
//        $files = array_diff(scandir($path), ['.', '..']);
//        foreach ($files as $file) {
//            (is_dir($path . '/' . $file)) ? self::deleteLRS($path . '/' . $file, $location) : unlink($path . '/' . $file);
//        }
//        return rmdir($path);
//    }
}