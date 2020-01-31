<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ .'/..');
$dotenv->load();

define('DS', DIRECTORY_SEPARATOR);
define('TIMEZONE', 'America/Mexico_City');
define('VIEWS_PATH', getenv('APP_DIR') . 'public/views/');

define('CONTROLLER_NAMESPACE', 'App\Controllers\\');

const class_directories = array(
    'App/',
    'App/Controllers/',
    'App/Models/',
    'App/Middleware/',
    'App/Helpers/'
);