<?php

namespace application\core;

class Model
{
    private static $instance = null;
    protected $filenamePath = [];
    private static $jsonfile = [];
    private static $getfile = [];

    public function __construct()
    {
    }

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getList()
    {
        $files = scandir($this->filenamePath);
        $resultUsers = [];
        foreach ($files as $key => $file) {
            $wordJSON = stristr($file, '.');
            if ($wordJSON === '.json') {
                $getfile = file_get_contents($this->filenamePath.$file);

                $jsonfile = json_decode($getfile, true);
                if ($jsonfile != null) {
                    $resultUsers[] = $jsonfile;
                }
            }

        }

        return $resultUsers;
    }

    public function add($data)
    {
        if (!isset($data['id']) || ($data['id'] == '') || ($data['id'] == '') || ($data['id'] == '')) {
            echo '';
        } else {
            file_put_contents( $this->filenamePath . $data['id'] . '.json', json_encode($data));

        }
    }

    public function edit($data,$id)
    {

        if (!isset($data['id']) || ($data['id'] == '') || ($data['id'] == '') || ($data['id'] == '')) {
            echo '';
        } else {

            file_put_contents( $this->filenamePath . $id . '.json', json_encode($data));
            rename( $this->filenamePath . $id . '.json',  $this->filenamePath . $data['id'] . '.json');

        }

    }

    public function delete($id)
    {
        /// !!!! $id = Router::get('id');
        $files = scandir($this->filenamePath);
        $name = $id;
        foreach ($files as $key => $file) {
            $word1 = stristr($file, '.');
            $word2 = stristr($file, '.', true);
            if ($word1 === '.json' && $name === $word2) {
                unlink($this->filenamePath . $file);
            }
        }

    }
    public function check($id)
    {

        $files = scandir($this->filenamePath);
        if ($id !== '') {
            foreach ($files as $key => $file) {
                $wordJSON1 = stristr($file, '.');
                $wordJSON2 = stristr($file, '.', true);
                if ($wordJSON1 === '.json' && $id === $wordJSON2) {
                    $getfile = file_get_contents($this->filenamePath . $file);
                    return self::$jsonfile = json_decode($getfile, true);
                }
            }
        }
    }

}