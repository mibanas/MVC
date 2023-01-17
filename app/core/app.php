<?php

namespace MVC\core;

class app{
    private $controller;
    private $method;
    private $params;

    public function __construct() {
        $this->url();
        $this->render();
    }

    private function url() {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode("/",$_SERVER['QUERY_STRING']);
            $this->controller = (!empty($url[0])) ? $url[0]."controllers" : "homecontrollers";
            $this->method = (!empty($url[1])) ? $url[1] : "index";
            unset($url[0],$url[1]);
            $this->params = array_values($url);
        } else {
            $this->controller = "homecontrollers";
            $this->method = "index";
            $this->params = [];
        }
    }

    private function render() {
        $controller = "MVC\controllers\\".$this->controller;
        if(class_exists($controller)) {
            if (method_exists($controller, $this->method)) {
                $controller = new $controller;
                call_user_func_array([$controller, $this->method], $this->params);
            }else {
                echo 'method not exist';
            }
        }else {
            echo 'class not exist';
        }
    }
}