<?php
namespace src\models;

class Tent {
    private $Id_tent;
    private $price;

    public function __construct($Id_tent, $price) {
        $this->Id_tent = $Id_tent;
        $this->price = $price;

    }

    /**
     * Get the value of Id_tent
     */
    public function getIdTent()
    {
        return $this->Id_tent;
    }

    /**
     * Set the value of Id_tent
     */
    public function setIdTent($Id_tent): self
    {
        $this->Id_tent = $Id_tent;

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