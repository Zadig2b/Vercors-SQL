<?php
namespace src\controllers;

use src\models\Database;
use src\models\Resa;
use src\models\Reservation;
use src\Repositories\ResaRepository;
use src\Repositories\ReservationRepository;
use src\Services\Reponse;
use PDO;

class ReservationController {
    private $reservationRepository;
    use Reponse;

    public function __construct()
    {
        // Initialize the Database class
        $database = new Database();

        // Get the PDO instance from the Database class
        $pdo = $database->getDB();

        // Initialize the ResaRepository with the PDO instance
        $this->reservationRepository = new ResaRepository($pdo);
    }
    public function saveReservation() {
    // Check if form submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $numPlaces = $_POST['nombrePlaces'];
        $isDiscounted = isset($_POST['tarifReduit']) ? $_POST['tarifReduit'] : false; // Default value if not set
        $totalPrice = $_POST['totalPrice2'];
        $passSelection = $_POST['passSelection'];
        $choixJour = isset($_POST['choixJour']) ? $_POST['choixJour'] : '';
    
        // Retrieve and clean options data directly
        $emplacementTente = isset($_POST['options']['tenteNuit']) ? implode(', ', array_keys($_POST['options']['tenteNuit'])) : '';
        $emplacementCamion = isset($_POST['options']['vanNuit']) ? implode(', ', array_keys(array_filter($_POST['options']['vanNuit']))) : '';
        $enfants = isset($_POST['options']['enfantsOui']) ? 'Enfants' : "Pas d'enfants";
        $nombreCasquesEnfants = isset($_POST['options']['nombreCasquesEnfants']) ? $_POST['options']['nombreCasquesEnfants'] : '';
        $nombreLugesEte = isset($_POST['options']['NombreLugesEte']) ? $_POST['options']['NombreLugesEte'] : '';
        $userId = $_SESSION['userId'] ?? null;

    
            // Create Reservation object
            $reservation = new Resa();
            $reservation->setNumPlaces($numPlaces);
            $reservation->setIsDiscounted($isDiscounted);
            $reservation->setTotalPrice($totalPrice);
            $reservation->setPassSelection($passSelection);
            $reservation->setChoixJour($choixJour);
            $reservation->setEmplacementTente($emplacementTente);
            $reservation->setEmplacementCamion($emplacementCamion);
            $reservation->setEnfants($enfants);
            $reservation->setNombreCasquesEnfants($nombreCasquesEnfants);
            $reservation->setNombreLugesEte($nombreLugesEte);
    
            // Initialize Database
            $database = new Database();
            $db = $database->getDB();
            
            // Call the repository method to save the reservation
            $reservationRepository = new ResaRepository($db);
            $newReservation = $reservationRepository->createResa($reservation, $userId);
    
            // Check if reservation saved successfully
            if ($newReservation) {
                echo "Reservation saved successfully";
                // Redirect or perform other actions as needed
            } else {
                echo "Failed to save reservation";
            }
        }
    }

    
    // ReservationController.php
public function showReservation()
{
    // Fetch reservations and store them in a variable
    // Assuming $reservations contains the reservations data
    $reservations = $this->reservationRepository->getResaByUserId($_SESSION['userId']);

    // Pass the reservations to the dashboard view
    $this->render("dashboard", ["reservations" => $reservations]);
}

    
        public function quit()
        {
          session_destroy();
          header('location: '.HOME_URL);
          die();
        }
      
        public function page404(): void
        {    
          header("HTTP/1.1 404 Not Found");
          $this->render('404');
        }
    }


