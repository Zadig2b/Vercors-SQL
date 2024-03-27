<?php

namespace src\Repositories;

use src\Models\User;
use PDO;
use PDOException;


class UserRepository {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function createUser(User $user) {
        $query = "INSERT INTO vercors_user (name, surname, phone, address, email, password, role, RGPD) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$user->getName(), $user->getSurname(), $user->getPhone(), $user->getAddress(), $user->getEmail(), $user->getPassword(), $user->getRole(), $user->getRGPD()]);
        return $this->db->lastInsertId();
    }

    public function getUserByEmail($email) {
        $query = "SELECT * FROM vercors_user WHERE email = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function validateCredentials($email, $password)
    {
        try {
            $query = "SELECT * FROM vercors_user WHERE email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                return new User(
                    $user['name'],
                    $user['surname'],
                    $user['phone'],
                    $user['address'],
                    $user['email'],
                    $user['password'],
                    $user['role'],
                    $user['RGPD']
                );
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return null;
    }
}

?>
