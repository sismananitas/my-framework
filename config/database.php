<?php

/**
 * Aquí se configura una base de datos PDO
 */

$opt = [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_EMULATE_PREPARES => false,
    \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
];

define('DB_OPTIONS', $opt);