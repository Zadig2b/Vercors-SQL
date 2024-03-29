<?php
namespace src\models;

class Van {
    private $Id_van;
    private $price;

    public function __construct($Id_van, $price) {
        $this->Id_van = $Id_van;
        $this->price = $price;

    }

    /**
     * Get the value of Id_van
     */
    public function getIdVan()
    {
        return $this->Id_van;
    }

    /**
     * Set the value of Id_van
     */
    public function setIdVan($Id_van): self
    {
        $this->Id_van = $Id_van;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }
}