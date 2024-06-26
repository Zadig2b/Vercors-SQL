<?php

namespace src\Repositories;

use src\Models\Resa;
use PDO;
use PDOException;

class ResaRepository
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function createResa(Resa $resa, $userId)
    {
        try {
            $query = "INSERT INTO vercors_reservation (nombrePlaces, tarifReduit, passSelection, prix, choixJour, emplacementTente, emplacementCamion, enfants, nombreCasquesEnfants, NombreLugesEte, id_User)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->execute([
                $resa->getNumPlaces(),
                $resa->getIsDiscounted(),
                $resa->getPassSelection(),
                $resa->getTotalPrice(),
                $resa->getChoixJour(),
                $resa->getEmplacementTente(),
                $resa->getEmplacementCamion(),
                $resa->getEnfants(),
                $resa->getNombreCasquesEnfants(),
                $resa->getNombreLugesEte(),
                $userId
            ]);
            return true; //Renvoie vrai si l'insertion est réussie
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false; //Renvoie false si l'insertion échoue
        }
    }

    public function getResaById($id)
    {
        try {
            $query = "SELECT * FROM vercors_reservation WHERE id = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function updateResa(Resa $resa)
    {
        try {
            $query = "UPDATE vercors_reservation SET nombrePlaces = ?, tarifReduit = ?, passSelection = ?, prix = ?, choixJour = ?, emplacementTente = ?, emplacementCamion = ?, enfants = ?, nombreCasquesEnfants = ?, NombreLugesEte = ?
                      WHERE id = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([
                $resa->getNumPlaces(),
                $resa->getTotalPrice(),
                $resa->getPassSelection(),
                $resa->getTotalPrice(),
                $resa->getChoixJour(),
                $resa->getEmplacementTente(),
                $resa->getEmplacementCamion(),
                $resa->getEnfants(),
                $resa->getNombreCasquesEnfants(),
                $resa->getNombreLugesEte(),
                $resa->getId()
            ]);
            return true; // Return true if update is successful
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false; // Return false if update fails
        }
    }

    public function deleteResa($id)
    {
        try {
            $query = "DELETE FROM vercors_reservation WHERE id = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);
            return true; // Return true if deletion is successful
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false; // Return false if deletion fails
        }
    }

    public function getResaByUserId($id)
    {
        try {
            $query = "SELECT * FROM vercors_reservation WHERE id_User = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all reservations
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return []; // Return an empty array if there's an error
        }
    }
    
}
