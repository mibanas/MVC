<?php

namespace MVC\core;

use Dcblogdev\PdoWrapper\Database as Database;


class controller {
    public function view($path, $params){
        extract($params);
        require_once(VIEWS.$path.".php");
    }


}