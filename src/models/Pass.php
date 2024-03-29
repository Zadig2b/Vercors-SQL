<?php
namespace src\models;


class Pass {
    private $Id_pass;
    private $type;
    private $price;
    

    public function __construct($Id_pass, $type, $price) {
        $this->Id_pass = $Id_pass;
        $this->type = $type;
        $this->price = $price;
       
    }

    /**
     * Get the value of Id_pass
     */
    public function getIdPass()
    {
        return $this->Id_pass;
    }

    /**
     * Set the value of Id_pass
     */
    public function setIdPass($Id_pass): self
    {
        $this->Id_pass = $Id_pass;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

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