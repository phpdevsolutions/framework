<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return $this->view('home', [
            'title' => 'home',
            'description' => 'descripcion de la pag'
        ]);
    }
}
