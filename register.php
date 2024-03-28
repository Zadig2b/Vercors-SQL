<?php

require_once 'src/Models/User.php';
require_once 'src/Repositories/UserRepository.php';
require_once 'src/Models/Database.php'; 

//Initialise la connexion à la base de données
$database = new \src\Models\Database();
$db = $database->getDB();

// Initialize UserRepository
$userRepository = new \src\Repositories\UserRepository($db);

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $RGPD = isset($_POST['RGPD']) ? 1 : 0; // Convert checkbox value to boolean

    // Create User object
    $user = new \src\Models\User($name, $surname, $phone, $address, $email, $password, $role, $RGPD);

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

?>

