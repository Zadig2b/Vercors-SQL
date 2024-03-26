<?php

class Reservation {
    private $id;
    private $userId;
    private $festivalId;
    private $quantity;
    private $createdAt;

    public function __construct($id, $userId, $festivalId, $quantity, $createdAt) {
        $this->id = $id;
        $this->userId = $userId;
        $this->festivalId = $festivalId;
        $this->quantity = $quantity;
        $this->createdAt = $createdAt;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getFestivalId() {
        return $this->festivalId;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    // Méthodes pour interagir avec la base de données...
}

?>
