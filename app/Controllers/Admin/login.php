<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('admin/login'); // Retourne la vue pour la page de connexion admin
    }
}
