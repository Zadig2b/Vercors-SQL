<?php

use src\Controllers\AuthController;
use src\Controllers\HomeController;
use src\controllers\ReservationController;

$authController = new AuthController();
$homeController = new HomeController();
$reservationController = new ReservationController();

$route = $_SERVER['REDIRECT_URL'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($route) {
    case HOME_URL:
        if (isset($_SESSION['connected'])) {
            $homeController->index();

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
                  $homeController->registration();
              }
          }
          break;

    case HOME_URL . 'deconnexion':
        $authController->logout();
        break;

    case HOME_URL . 'dashboard':
        $reservationController->showReservation();
        break;
    case HOME_URL . 'Reservation':
        if ($method === 'POST') {
            $reservationController->saveReservation();
            echo 'successful reservation';
        } else {
            $reservationController->showReservation();


        }

    default:
        $homeController->page404();
        break;
}

