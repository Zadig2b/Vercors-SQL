<?php

include_once 'config.php';

class Database {
    private $config;
    public $conn; // Instance de la connexion PDO

    public function __construct() {
        $this->config = new Config();
    }

    // Méthode pour obtenir la connexion à la base de données
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->config->getHost() . ";dbname=" . $this->config->getDbName(), $this->config->getUsername(), $this->config->getPassword());
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>
