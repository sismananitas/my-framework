<?php

namespace App\Controllers;

class UsuariosController extends Controller {
    
    public function index() {
        return view('usuarios.main');
    }
}