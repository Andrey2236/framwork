<?php

namespace application\models;

use application\core\Model;
use application\core\Router;

class StatementsModel extends Model
{


    public function __construct()
    {
    }


    public function getListStatements()
    {
        $id = Router::get('id');
        $dirsLRS = array_slice(scandir(__DIR__ . '/../config/dataLRS'), 2);
        $resultStatements = [];

        foreach ($dirsLRS as $key => $dirLRS) {
            if (is_dir(__DIR__ . '/../config/dataLRS/' . $dirLRS) && $dirLRS == $id) {
                $dirsStatements = array_slice(scandir(__DIR__ . '/../config/dataLRS/' . $dirLRS), 2);
                foreach ($dirsStatements as $ind => $dirStatements) {
                    if (is_dir(__DIR__ . '/../config/dataLRS/' . $dirLRS . '/' . $dirStatements) && $dirStatements === 'statements') {
                        $fileStatements = array_slice(scandir(__DIR__ . '/../config/dataLRS/' . $dirLRS . '/' . $dirStatements), 2);
                        foreach ($fileStatements as $fil => $file) {
                            $wordJSON = stristr($file, '.');
                            if ($wordJSON === '.json') {
                                $getfile = file_get_contents(__DIR__ . '/../config/dataLRS/' . $dirLRS . '/' . $dirStatements . '/' . $file);
                                $jsonfile = json_decode($getfile, true);
                                if ($jsonfile != null) {
                                    $resultStatements[] = $jsonfile;
                                }
                            }
                        }
                    }
                }
            }
        }
        return $resultStatements;
    }
}