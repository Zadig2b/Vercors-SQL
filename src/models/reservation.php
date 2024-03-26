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
        $this->numPlaces = $numPlaces;
        $this->isDiscounted = $isDiscounted;
        $this->createdAt = $createdAt;
    }

    // Méthodes pour interagir avec la base de données...

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
     * Get the value of userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     */
    public function setUserId($userId): self
    {
        $this->userId = $userId;

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
     * Get the value of createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     */
    public function setCreatedAt($createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}

?>
