<?php

namespace MVC\models;

use MVC\core\model;

class user extends model{
    public function GetAllUsers() {
        $result = model::db()->rows("select * FROM user");
        return $result;
    }

    public function GetUser($user_name, $user_password) {
        $result = model::db()->row("select * FROM user WHERE user_name = '$user_name' && user_password = '$user_password'");
        return $result;
    }
}