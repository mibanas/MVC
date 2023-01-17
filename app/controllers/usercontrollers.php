<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use Rakit\Validation\Validator;
use MVC\core\session;

class usercontrollers extends controller{

    public function __construct() {
        session::Start();
        $session_start = session::Get('user_session');
        if (empty($session_start)) {
            echo 'class not exist'."<br>";
        }
        else {
            echo 'class exist'."<br>";
        }
    }

    public function index() {
        echo "usercontroller";
    }

}