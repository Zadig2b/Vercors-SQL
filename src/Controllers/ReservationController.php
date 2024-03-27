<?php

namespace src\Controllers;

use Reservation as GlobalReservation;
use src\models\Reservation;
use src\Repositories\ReservationRepository;

echo ('hellooooooo in controller');

class ReservationController {
    private $ReservationRepo;


    public function __construct()
    {
        $this->ReservationRepo = new ReservationRepository();
        
    }

    public function createReservation() {
        $reservation = new Reservation();
        return $reservation->createReservation();
    }
}

