<?php

include_once 'Database.php';

class ReservationController {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    // Action to handle creating a new reservation
    public function createReservation($userId, $numberOfPlaces, $isDiscounted, $totalPrice) {
        try {
            $conn = $this->db->getConnection();

            // Prepare SQL statement
            $query = "INSERT INTO vercors_reservation (number_of_places, is_discounted, total_price, Id_User) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($query);

            // Bind parameters
            $stmt->bindParam(1, $numberOfPlaces);
            $stmt->bindParam(2, $isDiscounted);
            $stmt->bindParam(3, $totalPrice);
            $stmt->bindParam(4, $userId);

            // Execute SQL statement
            $stmt->execute();

            // Close connection
            $conn = null;

            return true; // Return true if successful
        } catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            return false; // Return false if unsuccessful
        }
    }

    // Action to handle retrieving a reservation by ID
    public function getReservation($reservationId) {
        try {
            $conn = $this->db->getConnection();

            // Prepare SQL statement
            $query = "SELECT * FROM vercors_reservation WHERE Id_reservation = ?";
            $stmt = $conn->prepare($query);

            // Bind parameter
            $stmt->bindParam(1, $reservationId);

            // Execute SQL statement
            $stmt->execute();

            // Fetch result
            $reservation = $stmt->fetch(PDO::FETCH_ASSOC);

            // Close connection
            $conn = null;

            return $reservation; // Return the reservation
        } catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            return null; // Return null if unsuccessful
        }
    }

    // Action to handle updating a reservation
    public function updateReservation($reservationId, $numberOfPlaces, $isDiscounted, $totalPrice) {
        try {
            $conn = $this->db->getConnection();

            // Prepare SQL statement
            $query = "UPDATE vercors_reservation SET number_of_places = ?, is_discounted = ?, total_price = ? WHERE Id_reservation = ?";
            $stmt = $conn->prepare($query);

            // Bind parameters
            $stmt->bindParam(1, $numberOfPlaces);
            $stmt->bindParam(2, $isDiscounted);
            $stmt->bindParam(3, $totalPrice);
            $stmt->bindParam(4, $reservationId);

            // Execute SQL statement
            $stmt->execute();

            // Close connection
            $conn = null;

            return true; // Return true if successful
        } catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            return false; // Return false if unsuccessful
        }
    }

    // Action to handle deleting a reservation
    public function deleteReservation($reservationId) {
        try {
            $conn = $this->db->getConnection();

            // Prepare SQL statement
            $query = "DELETE FROM vercors_reservation WHERE Id_reservation = ?";
            $stmt = $conn->prepare($query);

            // Bind parameter
            $stmt->bindParam(1, $reservationId);

            // Execute SQL statement
            $stmt->execute();

            // Close connection
            $conn = null;

            return true; // Return true if successful
        } catch(PDOException $exception) {
            echo "Error: " . $exception->getMessage();
            return false; // Return false if unsuccessful
        }
    }
    
    // Additional actions as needed
}

?>
