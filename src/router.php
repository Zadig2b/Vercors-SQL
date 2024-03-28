<?php

use src\Controllers\AuthController;
use src\Controllers\HomeController;

$authController = new AuthController();
$homeController = new HomeController();

$route = $_SERVER['REDIRECT_URL'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($route) {
    case HOME_URL:
        if (isset($_SESSION['connected'])) {
            header('location: ' . HOME_URL . 'dashboard');
            die;
        } else {
            $homeController->index();
        }
        break;

    case HOME_URL . 'connexion':
        if (isset($_SESSION['connected'])) {
            header('location: /dashboard');
            die;
        } else {
            if ($method === 'POST') {
                $authController->login();
            } else {
                $homeController->connexion();
            }
        }
        break;

        case HOME_URL . 'registration':
          if (isset($_SESSION['connected'])) {
              header('location: /dashboard');
              die;
          } else {
              if ($method === 'POST') {
                  $authController->registration();
              } else {
                  // $homeController->registration();
              }
          }
          break;

    case HOME_URL . 'deconnexion':
        // Add logout logic in AuthController
        // $authController->logout();
        break;

    case HOME_URL . 'dashboard':
        // Add dashboard logic here
        break;

    // Add more routes as needed

    default:
        $homeController->page404();
        break;
}
