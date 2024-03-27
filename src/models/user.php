<?php

namespace src\Models;

class User {
    private $id;
    private $name;
    private $surname;
    private $phone;
    private $address;
    private $email;
    private $password;
    private $role;
    private $RGPD;

    // Constructor
    public function __construct($name, $surname, $phone, $address, $email, $password, $role, $RGPD) {
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->RGPD = $RGPD;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }

    public function getRGPD() {
        return $this->RGPD;
    }
}

?>
