<?php

namespace MVC\controllers;

use MVC\core\controller;

class homecontrollers extends controller{

    public function index() {

        $data = $this->bd()->rows("select * FROM user");
        // echo "<pre>";
        // var_dump($data);die;
        $title = "Index Home";
        $h1 = "Mohamed Sanabi";
        $this->view("/home/index",['title'=>$title,"h1"=>$h1,"data"=>$data]);
    }

    public function add() {
        echo "add method";
    }

    public function login() {
        $title = "login";
        $this->view("/home/login",['title'=>$title]);
    }
}