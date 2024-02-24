<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use App\Models\UserModel;

class VerificationLogin extends Controller
{
    public function index()
    {
        // Vérifiez si des données de formulaire ont été soumises
        if ($this->request->getMethod() === 'post') {
            // Récupérer les données du formulaire
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('pass');

            // Charger le modèle d'accès à la base de données pour les utilisateurs
            $userModel = new UserModel();

            // Rechercher l'utilisateur dans la base de données en utilisant le nom d'utilisateur ou l'e-mail
            $user = $userModel->where('email', $username)
                              ->orWhere('username', $username)
                              ->first();

            // Vérifier si un utilisateur correspondant a été trouvé
            if ($user) {
                // Vérifier que le mot de passe correspond
                if ($password === $user['password']) {
                    // Si l'authentification réussit, redirigez l'utilisateur vers le tableau de bord ou une autre page
                    return redirect()->to('/user/dashboard');
                } else {
                    // Si le mot de passe ne correspond pas, affichez un message d'erreur
                    session()->setFlashdata('error', 'Invalid username or password');
                    return redirect()->to('/user/login');
                }
            } else {
                // Si aucun utilisateur correspondant n'est trouvé, affichez un message d'erreur
                session()->setFlashdata('error', 'Invalid username or password');
                return redirect()->to('/user/login');
            }
        }

        // Si aucune donnée n'a été soumise, affichez à nouveau la page de connexion
        return view('user/login');
    }

    public function dashboard()
    {
        // Cette méthode affiche le tableau de bord de l'utilisateur après la connexion réussie
        return view('user/dashboard');
    }
}
