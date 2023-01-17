<?php 

namespace MVC\core;

class helpers{

    public static function redirect($path) {
        header("LOCATION: DOMAINE_NAME".$path);
    }
}