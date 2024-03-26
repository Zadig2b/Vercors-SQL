<?php

class Festival {
    private $id;
    private $name;
    private $location;
    private $startDate;
    private $endDate;

    public function __construct($id, $name, $location, $startDate, $endDate) {
        $this->id = $id;
        $this->name = $name;
        $this->location = $location;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    // Méthodes pour interagir avec la base de données...
}

?>
