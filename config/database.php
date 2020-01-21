<?php

/**
 * Aquí se configura una base de datos PDO
 */
define('DB_ENGINE', 'mysql');
define('DB_NAME', 'db_name');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_USER', 'username');
define('DB_PASSWORD', 'pass');

$opt = [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_EMULATE_PREPARES => false,
    \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
];

define('DB_OPTIONS', $opt);