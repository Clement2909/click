<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('user/login'); // Retourne la vue pour la page de connexion user
    }
}
