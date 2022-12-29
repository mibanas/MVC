<?php

namespace MVC\core;



class app {

    private $controller;
    private $method;
    private $params;

    public function __construct() {
        $this->url();
        $this->render();
    }

    private function url() {
        if(!empty($_SERVER['QUERY_STRING'])) {
            $tab_url = explode("/", $_SERVER['QUERY_STRING']);
            // print_r($tab_url);
            $this->controller = (!empty($tab_url[0])) ? $tab_url[0]."controllers" : "homecontrollers" ;
            $this->method = (!empty($tab_url[1])) ? $tab_url[1] : "index";
            unset($tab_url[0], $tab_url[1]);
            $this->params = array_values($tab_url);
            // print_r($this->params);
        } else {
            echo "query not exist";
        }
    }

    private function render() {
        $class_search = "MVC\controllers\\".$this->controller;
        if (class_exists($class_search)) {

            $class_search = new $class_search;

            if (method_exists($class_search,$this->method)) {
                call_user_func_array(array($class_search,$this->method),$this->params);
            } else {
                echo "method not exist";
            }  
        } else {
            echo "class not exist";
        }
    }
}

