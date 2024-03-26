<?php

include_once 'config.php';

class Database {
    private $config;
    public $db; // Instance de la connexion PDO

    public function __construct() {
        $this->config;
    }

    // Méthode pour obtenir la connexion à la base de données
    public function getConnection() {
        $this->db = null;

        try {
            $this->db = new PDO("mysql:host=" . $this->config->getHost() . ";dbname=" . $this->config->getDbName(), $this->config->getUsername(), $this->config->getPassword());
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->db;
    }
}

?>
