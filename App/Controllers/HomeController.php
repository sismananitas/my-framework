<?php 

namespace App\Controllers;

class HomeController extends Controller {
    
    public function index() {
        $params = [
            'saludo' => $this->miHerencia()
        ];
        return view('home.welcome', $params);
    }
}