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

    public function getPersonnels(): array 
    {

        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * from "SUPERB_MED".personnel
        ');

        $stmt->execute();

        $personnels = $stmt->fetchAll(PDO::FETCH_ASSOC); 

        foreach ($personnels as $personnel) {
            $result[] = new Personnel(
                $personnel['title'],
                $personnel['description'],
                $personnel['specialisation'],
                $personnel['image']
            );
        }

        return $result;
    }

    public function getPersonnelByTitle(string $searchString)
    {
        $searchString = '%'.strtolower($searchString).'%';

        $stmt = $this->database->connect()->prepare('
          SELECT * FROM "SUPERB_MED".personnel WHERE LOWER(title) LIKE :search OR LOWER(description) LIKE :search OR LOWER(specialisation) LIKE :search
        ');

        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}