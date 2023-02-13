<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Personnel.php';

class PersonnelRepository extends Repository {

    public function getPersonnel(int $id): ?Personnel
    {
        $stmt = $this->database->connect()->prepare('
        SELECT * FROM "SUPERB_MED".personnel WHERE id = :id
        ');

        $stmt->bindParam('id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $personnel = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($personnel == false) {
            return null;
        }

        return new Personnel(
            $personnel['title'],
            $personnel['description'],
            $personnel['specialisation'],
            $personnel['image']
        );
    }

    public function addPersonnel(Personnel $personnel): void  {

        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO "SUPERB_MED".personnel (title, description, specialisation, created_at, id_assigned_by, image) 
            VALUES (?, ?, ?, ?, ?, ?)   
        ');

        $assignedById = 1;
        $stmt->execute([
            $personnel->getTitle(),
            $personnel->getDescription(),
            $personnel->getSpecialisation(),
            $date->format('Y-m-d'),
            $assignedById,
            $personnel->getImage()
        ]);
    }
}