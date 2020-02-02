<?php

namespace application\models;

use application\core\Model;
use application\core\Router;

class StateModel extends Model
{


    public function __construct()
    {
    }



    public function getListState()
    {
        $id = Router::get('id');
        $dirsLRS = array_slice(scandir(__DIR__ . '/../config/dataLRS'), 2);
        $resultState = [];

        foreach ($dirsLRS as $key => $dirLRS) {
            if (is_dir(__DIR__ . '/../config/dataLRS/' . $dirLRS) && $dirLRS == $id) {
                $dirsState = array_slice(scandir(__DIR__ . '/../config/dataLRS/' . $dirLRS), 2);
                foreach ($dirsState as $ind => $dirState) {
                    if (is_dir(__DIR__ . '/../config/dataLRS/' . $dirLRS . '/' . $dirState) && $dirState === 'state') {
                        $fileState = array_slice(scandir(__DIR__ . '/../config/dataLRS/' . $dirLRS . '/' . $dirState), 2);
                        foreach ($fileState as $fil => $file) {
                            $wordJSON = stristr($file, '.');
                            if ($wordJSON === '.json') {
                                $getfile = file_get_contents(__DIR__ . '/../config/dataLRS/' . $dirLRS . '/' . $dirState . '/' . $file);
                                $jsonfile = json_decode($getfile, true);
                                if ($jsonfile != null) {
                                    $resultState[] = $jsonfile;
                                }
                            }
                        }
                    }
                }
            }
        }
        return $resultState;
    }
}