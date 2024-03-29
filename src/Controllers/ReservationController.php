<?php
namespace src\controllers;

use src\models\Database;
use src\models\Resa;
use src\models\Reservation;
use src\Repositories\ResaRepository;
use src\Repositories\ReservationRepository;
use src\Services\Reponse;

class ReservationController {
    private $reservationRepository;
    use Reponse;

    
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
            $newReservation = $reservationRepository->createResa($reservation);
    
            // Check if reservation saved successfully
            if ($newReservation) {
                echo "Reservation saved successfully";
                // Redirect or perform other actions as needed
            } else {
                echo "Failed to save reservation";
            }
        }
    }
    

    public function showReservation() {
        // Initialize Database
        $database = new Database();
        $db = $database->getDB();

        // Call the repository method to get all reservations
        $reservationRepository = new ReservationRepository($db);
        $reservations = $reservationRepository->getAllReservations();

        // Check if reservations retrieved successfully
        if ($reservations) {
            // Render the reservation template with the reservations
            $this->render('reservationTemplate', ['reservations' => $reservations]);
        } else {
            // Handle error scenario
            echo "Failed to retrieve reservations";
        }
        $this->render('reservationTemplate');

    }
        
    


    public function traiterDonnees($donnees) {
        //  ici, faire le traitement des données avant de les enregistrer

        //récupération et nettoyage de chaque champ de "Réservation"
        $nombrePlaces = $_POST['nombrePlaces'];
        $tarifReduit = isset($_POST['tarifReduit']) && $_POST['tarifReduit'] === 'on' ? 'tarif réduit' : 'plein tarif';
        $passSelection = $_POST['passSelection'];
        $prix = $_POST['totalPrice2'] . "€";
        $choixJour = isset($_POST['choixJour']) ? htmlspecialchars($_POST['choixJour']) : '';


        //récupération et nettoyage de chaque champ de "Options"
        $options = isset($_POST['options']) ? $_POST['options'] : [];

$emplacementTente = isset($options['tenteNuit']) ? 'Tente: ' . implode(', ', array_keys($options['tenteNuit'])) : '';
$emplacementCamion = isset($options['vanNuit']) ? 'Van: ' . implode(', ', array_keys(array_filter($options['vanNuit']))) : '';
$enfants = isset($options['enfantsOui']) ? 'Enfants' : "Pas d'enfants";
$nombreCasquesEnfants = isset($options['nombreCasquesEnfants']) && !empty($options['nombreCasquesEnfants'])
    ? htmlspecialchars($options['nombreCasquesEnfants']) . " Casque(s)"
    : '';

$NombreLugesEte = isset($options['NombreLugesEte']) && !empty($options['NombreLugesEte'])
    ? htmlspecialchars($options['NombreLugesEte']) . " luge(s)"
    : '';


        //récupération et nettoyage de chaque champ de "Coordonnées"
        $nom = htmlspecialchars($donnees['nom']);
        $prenom = htmlspecialchars($donnees['prenom']);
        $email = htmlspecialchars($donnees['email']);
        $telephone = htmlspecialchars($donnees['telephone']);
        $adressePostale = htmlspecialchars($donnees['adressePostale']);




        // $reservation = new Reservation();
        // $reservation->enregistrerReservation(
        //     $nom, $prenom, $email, $telephone, $adressePostale, 
        //     $nombrePlaces, $tarifReduit, $passSelection, $prix, $choixJour,
        //     $emplacementTente, $emplacementCamion, $enfants, $nombreCasquesEnfants, $NombreLugesEte
        // );
        
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


