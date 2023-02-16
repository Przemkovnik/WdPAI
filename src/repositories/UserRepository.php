<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository {

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM "SUPERB_MED".users u LEFT JOIN "SUPERB_MED".users_details ud 
        ON u.id_user_details = ud.id WHERE email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['legal_name'],
            $user['id']
        );
    }

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO "SUPERB_MED".users_details (legal_name)
            VALUES (?)
        ');

        $stmt->execute([
            $user->getLegalName()
        ]);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO "SUPERB_MED".users (email, password, id_user_details)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $this->getUserDetailsId($user)
        ]);
    }

    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM "SUPERB_MED".users_details WHERE legal_name = :legal_name
        ');
        $stmt->bindParam(':legal_name', $user->getLegalName(), PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id'];
    }
}