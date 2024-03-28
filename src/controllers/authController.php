<?php

namespace src\controllers;

use src\Models\Database;
use src\Repositories\UserRepository;

class AuthController
{
    public function login()
    {
        // session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password']) && isset($_POST['email'])) {
            $password = $_POST['password'];
            $email = $_POST['email'];

            $database = new Database();
            $db = $database->getDB();
            $userRepository = new UserRepository($db);

            // Validate email/password combination
            $user = $userRepository->validateCredentials($email, $password);

            if ($user) {
                // Password correct, mark the user as connected
                $_SESSION['connected'] = true;
                $_SESSION['user'] = $user->getEmail(); // Store user email in session
                // Redirect the user to the dashboard page
                header('Location: dashboard.php');
                exit;
            } else {
                // Incorrect email/password
                $error = "Adresse email ou mot de passe incorrect";
            }
        }

        // Load the login view
        require_once 'views/connexion.php';
    }
}
