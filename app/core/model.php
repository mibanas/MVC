<?php

namespace MVC\core;

use Dcblogdev\PdoWrapper\Database as Database;


class model {

    static function db(){
        $options = [
            //required
            'username' => USERNAME,
            'database' => DATABASE,
            //optional
            'password' => '',
            'type' => DATABASE_TYPE,
            'charset' => 'utf8',
            'host' => SERVER,
            'port' => PORT
        ];
        $db = new Database($options);

        return $db;
    }
}