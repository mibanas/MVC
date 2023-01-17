<?php

namespace MVC\core;

class session {
    public static function Start() {
        @session_start();
    }

    public static function Set($key, $vavlue) {
        $_SESSION[$key] = $vavlue;
    }

    public static function Get($key) {
        if(!empty($_SESSION[$key]))
        return $_SESSION[$key];
    }

    public static function Destroy() {
        @session_destroy();
    }
}