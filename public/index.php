<?php


define("BASE_URL","http://www.php-mvc.erasoft/");
define("DS",DIRECTORY_SEPARATOR);
define('ROOT_PATH',realpath(dirname(__DIR__)).DS);
define("APP",ROOT_PATH."app".DS);
define("CORE",APP."Core".DS);
define("CONFIG",APP."Config".DS);
define("CONTROLLERS",APP."Controllers".DS);
define("MODELS",APP."Models".DS);
define("VIEWS",APP."Views".DS);
define("UPLOADS",ROOT_PATH."public".DS."uploads".DS);


require_once('../vendor/autoload.php');
require_once(CORE.'Helper.php');

$app = new CRUDMVC\Core\App();