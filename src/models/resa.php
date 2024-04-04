<?php

namespace src\models;

class Resa {
    private $id;
    private $numPlaces;
    private $isDiscounted;
    private $totalPrice;
    private $userId;
    private $passSelection;
    private $choixJour;
    private $emplacementTente;
    private $emplacementCamion;
    private $enfants;
    private $nombreCasquesEnfants;
    private $nombreLugesEte;





    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
    

    /**
     * Get the value of numPlaces
     */
    public function getNumPlaces()
    {
        return $this->numPlaces;
    }

    /**
     * Set the value of numPlaces
     */
    public function setNumPlaces($numPlaces): self
    {
        $this->numPlaces = $numPlaces;

        return $this;
    }

    /**
     * Get the value of isDiscounted
     */
    public function getIsDiscounted()
    {
        return $this->isDiscounted;
    }

    /**
     * Set the value of isDiscounted
     */
    public function setIsDiscounted($isDiscounted): self
    {
        $this->isDiscounted = $isDiscounted;

        return $this;
    }

    /**
     * Get the value of totalPrice
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * Set the value of totalPrice
     */
    public function setTotalPrice($totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * Get the value of userId
     */
    public function getUserId()
    {
        return $_SESSION['userId'] ?? null;
    }

    /**
     * Set the value of userId to session
     */
    public function setUserId($userId): self
    {
        $_SESSION['userId'] = $userId;

        return $this;
    }

    
    public function setPassSelection($passSelection) {
        $this->passSelection = $passSelection;
    }

    public function getPassSelection() {
        return $this->passSelection;
    }

    public function setChoixJour($choixJour) {
        $this->choixJour = $choixJour;
    }

    public function getChoixJour() {
        return $this->choixJour;
    }

    public function setEmplacementTente($emplacementTente) {
        $this->emplacementTente = $emplacementTente;
    }

    public function getEmplacementTente() {
        return $this->emplacementTente;
    }

    public function setEmplacementCamion($emplacementCamion) {
        $this->emplacementCamion = $emplacementCamion;
    }

    public function getEmplacementCamion() {
        return $this->emplacementCamion;
    }

    public function setEnfants($enfants) {
        $this->enfants = $enfants;
    }

    public function getEnfants() {
        return $this->enfants;
    }

    public function setNombreCasquesEnfants($nombreCasquesEnfants) {
        $this->nombreCasquesEnfants = $nombreCasquesEnfants;
    }

    public function getNombreCasquesEnfants() {
        return $this->nombreCasquesEnfants;
    }

    public function setNombreLugesEte($nombreLugesEte) {
        $this->nombreLugesEte = $nombreLugesEte;
    }

    public function getNombreLugesEte() {
        return $this->nombreLugesEte;
    }

}