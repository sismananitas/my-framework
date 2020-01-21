<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
session_start();

require_once 'config/global.php';
require_once 'config/database.php';
require_once 'config/views.php';
require_once 'App/Helpers/Functions.php';
require_once 'vendor/autoload.php';
require_once 'autoload.php';

use App\Core\Router;

date_default_timezone_set(TIMEZONE);

$router = new Router($_SERVER['REQUEST_URI']);

require_once 'routes/web.php';

$router->run();