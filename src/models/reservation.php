<?php

class Reservation {
    private $id;
    private $userId;
    private $numPlaces;
    private $isDiscounted;
    private $createdAt;

    public function __construct($id, $userId, $numPlaces, $isDiscounted, $createdAt) {
        $this->id = $id;
        $this->userId = $userId;
        $this->createdAt = $createdAt;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    // Méthodes pour interagir avec la base de données...
}

?>
