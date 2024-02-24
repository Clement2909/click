<?php

namespace App\Controllers\User;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
    public function index()
    {
        // Vérifiez si des données de formulaire ont été soumises
        if ($this->request->getMethod() === 'post') {
            // Récupérer les données du formulaire
            $userData = [
                'username' => $this->request->getPost('username'),
                'email'    => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
            ];

            // Récupérer à nouveau le mot de passe pour la confirmation
            $confirmPassword = $this->request->getPost('confirm_password');

            // Vérifier si les mots de passe correspondent
            if ($userData['password'] !== $confirmPassword) {
                session()->setFlashdata('error', 'Les mots de passe ne correspondent pas.');
                return redirect()->to('/user/register');
            }

            // Vérifier si les emails correspondent
            if ($userData['email'] !== $this->request->getPost('confirm_email')) {
                session()->setFlashdata('error', 'Les adresses e-mail ne correspondent pas.');
                return redirect()->to('/user/register');
            }

            // Ajouter ici la validation pour que le mot de passe commence par une majuscule,
            // contient au moins un chiffre et une ponctuation
            // Vous pouvez utiliser des expressions régulières pour cela

            // Charger le modèle d'accès à la base de données pour les utilisateurs
            $userModel = new UserModel();

            // Insérer l'utilisateur dans la base de données
            $userModel->insert($userData);

            // Définir un message flash pour la confirmation
            session()->setFlashdata('success', 'Vous êtes bien inscrit !');
            
            // Rediriger l'utilisateur vers la page de connexion
            return redirect()->to('/user/login');
        }

        // Si aucune donnée de formulaire n'a été soumise, affichez à nouveau la page d'inscription
        return view('user/register');
    }
}
