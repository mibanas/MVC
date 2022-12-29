<?php

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database as Database;

class controller {
    public function view($path, $params) {
        extract($params);
        require_once(VIEWS.$path.".php");
    }

    public function bd(){
        $options = [
            //required
            'username' => 'root',
            'database' => 'portfolio',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];
        
        return $db = new Database($options);
    }
}


