<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\AdminModel; // Importez le modèle AdminModel

class VerificationLogin extends Controller
{
    public function index()
    {
        // Vérifiez si des données de formulaire ont été soumises
        if ($this->request->getMethod() === 'post') {
            // Récupérer les données du formulaire
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('pass');

            // Charger le modèle d'accès à la base de données pour les administrateurs
            $adminModel = new AdminModel();

            // Rechercher l'administrateur dans la base de données en utilisant les informations d'identification fournies
            $admin = $adminModel->where('username', $username)
                                ->where('password', $password)
                                ->first();

            // Vérifier si un administrateur correspondant a été trouvé
            if ($admin) {
                // Si l'authentification réussit, redirigez l'utilisateur vers la page de tableau de bord de l'administrateur
                return redirect()->to('/admin/dashboard');
            } else {
                // Si l'authentification échoue, affichez un message d'erreur
                session()->setFlashdata('error', 'Invalid username or password');
                return redirect()->to('/admin/login');
            }
        }

        // Si aucune donnée n'a été soumise, affichez à nouveau la page de connexion
        return view('admin/login');
    }

    public function dashboard()
    {
        // Cette méthode affiche le tableau de bord de l'administrateur après la connexion réussie
        return view('admin/dashboard');
    }
}
