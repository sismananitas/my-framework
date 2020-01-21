<?php

namespace App\Models;

class Usuario extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getAll() {
        $users = [
            'id' => 1,
            'username' => 'admin',
            'email' => 'admin@framework.net'
        ];

        return $users;
    }
}