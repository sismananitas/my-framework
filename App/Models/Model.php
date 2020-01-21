<?php

namespace App\Models;

use App\Helpers\Conexion;

class Model {
    protected $con;

    public function __construct()
    {
        $this->con = Conexion::getInstance();
    }
}