<?php

use src\Controllers\ReservationController;

$reservationController = new ReservationController;

$route = $_SERVER['REDIRECT_URL'];
$method = $_SERVER['REQUEST_METHOD'];


switch ($$route) {
    case HOME_URL . 'Reservation':
       echo $reservationController->createReservation($_POST);
        break;
    
    default:
        # code...
        break;
}
