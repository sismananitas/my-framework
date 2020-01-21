<?php

namespace App\Middleware;

class Auth {

    /**
     * Prueba si el usuario es admin
     * 
     * @return string
     */
    public static function isAdmin() {
        if (!isset($_SESSION['user']) || $_SESSION['user']['rol'] != 'Administrador') {
            route(ROOT);
        }
    }

    /**
     * Prueba si el usuario está logueado
     * 
     * @return string
     */
    public static function isUser() {
        if (!isset($_SESSION['user'])) {
            route(ROOT . 'login');
        }
    }

    public function onSession() {
        if (isset($_SESSION['user'])) {
            route(ROOT);
        }
    }
}