<?php
// session_start(); // Start the session

namespace src\views;

use src\controllers\ReservationController;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation Successful</title>
  <!-- <link rel="stylesheet" href="../../public/assets/css/"> -->
</head>
<body>
<div class="success-message">
    <h2>Thank you for your reservation!</h2>
    <?php

    echo ('<ul>');

    $reservationController = new ReservationController();
    $reservations = $reservationController->showReservation();

      foreach($reservations as $reservation) {
        echo '<li>' . $reservation->setId() .'</li>';
        echo '<li>' . $reservation->setNumPlaces() .'</li>';
        echo '<li>' . $reservation->setIsDiscounted() .'</li>';
        echo '<li>' . $reservation->setTotalPrice() .'</li>';
        echo('</ul>');
      }
    //   // // Check if reservation data is available
    //   // // if (isset($_SESSION['ReservationController'])) {
    //   // //   $reservationData = $_SESSION['ReservationController'];
    //   // // echo '<ul>';
    //   // //   foreach($reservations as $reservation) {
    //   // //     echo "<li><p>Reservation Id : ' . $reservation->getId() . '</p></li>';

    //   ?>
    //             <!-- <li><p>Number of places : . $reservation->getNumPlaces() . </p></li>
    //             <li><p>Discount : . $reservation->getIsDiscounted() . </p></li>
    //             <li><p>Total price : . $reservation->getTotalPrice() . </p></li>";

    //     }

    //     // Display reservation details
    //     echo "<p>Name: {$reservationData[0]} {$reservationData[1]}</p>";
    //     echo "<p>Email: {$reservationData[2]}</p>";
    //     echo "<p>Nombre de places: {$nu[5]}</p>";
    //     echo "<p>Prix Total: {$totalPrice[8]}</p>";
    //   // } else {
    //   //   echo "<p>No reservation data available.</p>";
    //   // }
    // // ?> -->
  </div>
</body>
</html>
