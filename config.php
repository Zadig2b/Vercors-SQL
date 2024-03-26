<?php

class Config {
    private $host = "localhost"; // Adresse du serveur MySQL
    private $db_name = "vercors"; // Nom de votre base de données
    private $username = "root"; // Nom d'utilisateur MySQL
    private $password = ""; // Mot de passe MySQL

    // Méthodes pour obtenir les informations de connexion à la base de données
    public function getHost() {
        return $this->host;
    }

    public function getDbName() {
        return $this->db_name;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
}

?>
