<?php

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__)); // Renvoie le chemin du dossier parent : C:\xampp\htdocs\mvc
define("APP", ROOT.DS."app");
define("CONFIG", APP.DS."config");
define("CORE", APP.DS."core");
define("MODELS", APP.DS."models");
define("VIEWS", APP.DS."views");


require_once("../vendor/autoload.php");

$app = new MVC\core\app();