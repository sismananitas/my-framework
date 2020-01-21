<?php

namespace App\Controllers;

class Controller {

    protected function isPOST() {
        $response = false;

        if (empty($_POST)) {
            route(ROOT);
        }
        return $response;
    }

    protected function isGET() {
        $response = false;

        if (empty($_GET)) {
            route(ROOT);
        }
        return $response;
    }

    protected function miHerencia() {
        return 'Hola mundo';
    }
}