<?php

class User {
    private $id;
    private $name;
    private $username;
    private $email;
    private $password;

    public function __construct($id, $username, $email, $password) {
        $this->id = $id;
        $this->name = $username;
        $this->email = $email;
        $this->password = $password;
    }
    public function getId() {
        return $this->id;
    }
    public function getUsername() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setUsername($username) {
        $this->name = $username;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    

    // Méthodes pour interagir avec la base de données...
}

?>
