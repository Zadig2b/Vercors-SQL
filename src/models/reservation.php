<?php
echo 'you found me'; 

class Reservation {
    private $id;
    private $numPlaces;
    private $isDiscounted;
    private $totalPrice;
    private $userId;



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
}