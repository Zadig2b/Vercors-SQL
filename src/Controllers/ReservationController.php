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
        // Initialiser la classe Base de données
        $database = new Database();

        // Récupérez l'instance PDO de la classe Database
        $pdo = $database->getDB();

        // Initialize the ResaRepository with the PDO instance
        $this->reservationRepository = new ResaRepository($pdo);
    }
    public function saveReservation() {
    // Vérifiez si le formulaire a été soumis
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

    
            //Créer un objet de réservation
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
    
            //Initialiser la base de données
            $database = new Database();
            $db = $database->getDB();
            
            //Appelez la méthode du référentiel pour enregistrer la réservation
            $reservationRepository = new ResaRepository($db);
            $newReservation = $reservationRepository->createResa($reservation, $userId);
    
            //Vérifiez si la réservation a été enregistrée avec succès
            if ($newReservation) {
                echo "Reservation saved successfully";
                $this->render("accueil");

                // Redirect or perform other actions as needed
            } else {
                echo "Failed to save reservation";
            }
        }
    }

    
public function showReservation()
{
    //Récupère les réservations et les stocke dans une variable
    //En supposant que $reservations contient les données de réservation
    $reservations = $this->reservationRepository->getResaByUserId($_SESSION['userId']);

    //Passe les réservations à la vue tableau de bord
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


