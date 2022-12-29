<?php


define("DS", DIRECTORY_SEPARATOR); // séparateur selon le type de système 
define("ROOT", dirname(__DIR__)); // le root du fichier 
define("APP", ROOT.DS."app"); 

// répertoire des dossiers 

define("CONFIG", ROOT.DS."app".DS."config");
define("CONTROLLERS", ROOT.DS."app".DS."controllers");
define("CORE", ROOT.DS."app".DS."core");
define("MODELS", ROOT.DS."app".DS."models");
define("VIEWS", ROOT.DS."app".DS."views");

require_once("../vendor/autoload.php");


$app = new MVC\core\app();

