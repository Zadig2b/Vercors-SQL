<?php


class Options {
    private $Id_options;
    private $name;
    private $stock;
    private $price;
    

    public function __construct($Id_options, $name, $stock, $price) {
        $this->Id_options = $Id_options;
        $this->name = $name;
        $this->stock = $stock;
        $this->price = $price;
       
    }

    /**
     * Get the value of Id_options
     */
    public function getIdOptions()
    {
        return $this->Id_options;
    }

    /**
     * Set the value of Id_options
     */
    public function setIdOptions($Id_options): self
    {
        $this->Id_options = $Id_options;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     */
    public function setStock($stock): self
    {
        $this->stock = $stock;

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