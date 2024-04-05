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

        // Validate email/password combination
        $user = $userRepository->validateCredentials($email, $password);

        if ($user) {
            // Password correct, mark the user as connected
            $_SESSION['connected'] = true;
            $_SESSION['userId'] = $user->getId(); // Store user ID in session
            $_SESSION['name'] = $user->getName(); // Store user email in session
            

            
            // Redirect the user to the dashboard page
            header("Location: /dashboard");
            exit;
        } else {
            // Incorrect email/password
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
        // Check if form submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve form data
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
            $role = $_POST['role'];
            $RGPD = isset($_POST['RGPD']) ? 1 : 0; // Convert checkbox value to boolean

            // Create User object
            $user = new \src\models\User($name, $surname, $phone, $address, $email, $hashedPassword, $role, $RGPD);

            // Initialize Database
            $database = new Database();
            $db = $database->getDB();

            // Initialize UserRepository
            $userRepository = new UserRepository($db);

            // Create user account
            $userId = $userRepository->createUser($user);

            // Check if user account created successfully
            if ($userId) {
                echo "User account created successfully with ID: $userId";
                // Redirect to login page or user dashboard
                // header("Location: dashboard.php");
                // exit();
            } else {
                echo "Failed to create user account";
            }
        }

        // Load the registration view
        $this->render('Registration');
    }
}
