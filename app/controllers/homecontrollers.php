<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use Rakit\Validation\Validator;
use MVC\core\session;

class homecontrollers extends controller{

    public function __construct() {
        session::Start();
    }

    public function index() {
        $title = "index home";
        $h1 = "fist view page";

        $user = new user();
        $data_user = $user->GetAllUsers();

        $this->view("\home\index",['title'=>$title,'h1'=>$h1]);
    }

    public function add() {
        echo "add method";
    }

    public function login() {
        $this->view("\home\login",[]);
    }

    public function postlogin(){
        // echo "<pre>";
        // print_r($_POST);
        $validator = new Validator;

        $validation = $validator->validate($_POST + $_FILES, [
            'username'              => 'required',
            'password'              => 'required|min:6',
        ]);

        if ($validation->fails()) {
            // handling errors
            $errors = $validation->errors();
            echo "<pre>";
            print_r($errors->firstOfAll());
            echo "</pre>";
            exit;
        } else {
            // validation passes
            $user = new user();
            $data_user = $user->GetUser($_POST['username'],$_POST['password']);
            session::Set('user_session',$data_user);
            header('LOCATION: user/index');
        }

    }
}