<?php

function app_autoload($class) {
    $class_path = str_replace('\\', '/', $class). '.php';
    
    if (is_file($class_path)) {
        include_once $class_path;  
    }

    foreach (class_directories as $dir) {
        $class_path = $dir . $class . '.php';

        if (is_file($class_path)) {
            include_once $class_path;
        }
    }
}

spl_autoload_register('app_autoload');