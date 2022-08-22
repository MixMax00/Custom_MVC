<?php
use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */

require_once __DIR__ . '/vendor/autoload.php';


// load .env environment

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('ROOT', __DIR__);
define('VIEWS', __DIR__. '/Views/');
define('ASSETS_DIR', __DIR__. '/assets/');

define('BASE_DIR', isset($_ENV['BASE_DIR']) ? $_ENV['BASE_DIR'] : ' ');

define('URL', $_SERVER['REQUEST_SCHEME'] .'://'. $_SERVER['HTTP_HOST'] .'/'. BASE_DIR);
define('ASSET_URL', URL . '/assets');

require_once 'Routes/web.php';


// var_dump($_ENV['BASE_DIR']);


SimpleRouter::setDefaultNamespace('\app\Controllers');

// Start the routing
SimpleRouter::start();