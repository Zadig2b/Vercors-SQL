<?php

namespace src\Repositories;

use src\models\Reservation;
use src\models\Database;
use PDO;
<<<<<<< HEAD
use PDOException;
=======
>>>>>>> ccf7a092ba912cb8f2aefea443bad01a3f26542d

class ReservationRepositiory {
    private $db;

    public function __construct()
    {
       
     $database = new Database;
     $this->db = $database->getDB();
  
    }

    
    public function createReservation(Reservation $reservation) {
        $sql= "INSERT INTO " .PREFIXE . "reservation (Id_reservation, number_of_places, is_discounted, total_price, Id_User) VALUES (:Id_reservation, :number_of_places, :is_discounted, :total_price, :Id_User)";
        
        $statement = $this->db->prepare($sql);
        
        $return = $statement->execute([
            ':Id_reservation' => $reservation->getId(),
            ':number_of_places' => $reservation->getNumPlaces(),
            ':is_discounted' => $reservation->getIsDiscounted(),
            ':total_price' => $reservation->getTotalPrice(),
            ':Id_User' => $reservation->getUserId(),
        ]);
        
        return $return;        
    }
    
    public function getAllReservations() {
    
    $sql = $this->concatenationRequest("");
    
    $req = $this->db->query($sql);
    
    $data = $req->fetchAll(PDO::FETCH_CLASS, Reservation::class);

        return $data;
   
    
    }

    private function concatenationRequest(string $request): string
  {
    $sql = "SELECT 
    r.Id_reservation,
    r.number_of_places,
    r.is_discounted,
    r.total_price,
    u.Id_User,
    u.name AS user_name,
    u.surname AS user_surname,
    u.phone,
    u.address,
    u.email,
    u.RGPD,
    GROUP_CONCAT(o.name) AS option_names,
    GROUP_CONCAT(o.Id_options) AS option_ids,
    t.price AS tent_price,
    v.price AS van_price,
    dp._date AS pass_date
FROM 
    vercors_reservation AS r
JOIN 
    vercors_User AS u ON r.Id_User = u.Id_User
LEFT JOIN 
    contains AS c ON r.Id_reservation = c.Id_reservation
LEFT JOIN 
    vercors_options AS o ON c.Id_options = o.Id_options
LEFT JOIN 
    accommodation AS a ON r.Id_reservation = a.Id_reservation
LEFT JOIN 
    vercors_tent AS t ON a.Id_tent = t.Id_tent
LEFT JOIN 
    vercors_van AS v ON a.Id_van = v.Id_van
LEFT JOIN 
    date_pass AS dp ON r.Id_reservation = dp.Id_reservation
GROUP BY 
    r.Id_reservation;";

    $sql .= $request;
    $sql .= " GROUP BY r.Id_reservation;";

    return $sql;
  }
}




