<?php

namespace src\controllers;

use src\Models\Database;
use src\Repositories\UserRepository;
use src\Services\Reponse;

class AuthController
{
    use Reponse;
    public function login()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password']) && isset($_POST['email'])) {
        $password = $_POST['password'];
        $email = $_POST['email'];

        $database = new Database();
        $db = $database->getDB();
        $userRepository = new UserRepository($db);

        //Valider la combinaison email/mot de passe
        $user = $userRepository->validateCredentials($email, $password);

        if ($user) {
            //Mot de passe correct, marque l'utilisateur comme connecté
            $_SESSION['connected'] = true;
            $_SESSION['userId'] = $user->getId(); 
            $_SESSION['name'] = $user->getName(); 
            

            
            //Rediriger l'utilisateur vers la page du tableau de bord
            header("Location: /dashboard");
            exit;
        } else {
            $error = "Adresse email ou mot de passe incorrect";
            $this->render('Connexion', ['error' => $error]);
        }
    }

    // Load the login view
    $this->render('Connexion');
}



public function logout(){
    session_start();
    session_destroy();
    header("Location: " . HOME_URL);
    exit;
}


    public function registration()
    {
        //Vérifiez si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Récupérer les données du formulaire
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); //Hachez le mot de passe
            $role = $_POST['role'];
            $RGPD = isset($_POST['RGPD']) ? 1 : 0; //Convertir la valeur de la case à cocher en booléen

            //Créer un objet utilisateur
            $user = new \src\models\User($name, $surname, $phone, $address, $email, $hashedPassword, $role, $RGPD);

            //Initialiser la base de données
            $database = new Database();
            $db = $database->getDB();

            // Initialize UserRepository
            $userRepository = new UserRepository($db);

            //Créer un compte utilisateur
            $userId = $userRepository->createUser($user);

            //Vérifiez si le compte utilisateur a été créé avec succès
            if ($userId) {
                echo "User account created successfully with ID: $userId";

            } else {
                echo "Failed to create user account";
            }
        }

        // Load the registration view
        $this->render('Registration');
    }
}
