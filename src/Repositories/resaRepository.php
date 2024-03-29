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

    public function createResa(Resa $resa)
    {
        try {
            $query = "INSERT INTO resa (nombrePlaces, tarifReduit, passSelection, prix, choixJour, emplacementTente, emplacementCamion, enfants, nombreCasquesEnfants, NombreLugesEte)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
                $resa->getNombreLugesEte()
            ]);
            return true; // Return true if insertion is successful
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false; // Return false if insertion fails
        }
    }

    public function getResaById($id)
    {
        try {
            $query = "SELECT * FROM Resa WHERE id = ?";
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
            $query = "UPDATE Resa SET nombrePlaces = ?, tarifReduit = ?, passSelection = ?, prix = ?, choixJour = ?, emplacementTente = ?, emplacementCamion = ?, enfants = ?, nombreCasquesEnfants = ?, NombreLugesEte = ?
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
            $query = "DELETE FROM Resa WHERE id = ?";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id]);
            return true; // Return true if deletion is successful
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false; // Return false if deletion fails
        }
    }
}
