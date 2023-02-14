<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Personnel.php';
require_once __DIR__.'/../repositories/PersonnelRepository.php';

class PersonnelController extends AppController {

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/img/personnel/';

    private $messages = [];
    private $personnelRepository;

    public function __construct()
    {
        parent::__construct();

        $this->personnelRepository = new PersonnelRepository();
    }

    public function personnel() {
        $personnels = $this->personnelRepository->getPersonnels();

        $this->render('personnel', ['personnels' => $personnels]);
    }

    public function addPersonnel() {
        
        if($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $personnel = new Personnel($_POST['title'], $_POST['description'], $_POST['specialisation'], $_FILES['file']['name']);

            $this->personnelRepository->addPersonnel($personnel);

            return $this->render('personnel', ['messages' => $this->messages, 'personnels' => $this->personnelRepository->getPersonnels()]);
        }

        $this->render('addPersonnel', ['messages' => $this->messages]);
    }

    public function search()
    {

        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if($contentType === "application/json") {

            $content = trim(file_get_contents("php://input"));

            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);
            echo json_encode($this->personnelRepository->getPersonnelByTitle($decoded['search']));
        }
    }

    private function validate(array $file): bool
    {
        if($file['size'] > self::MAX_FILE_SIZE) {
            $this->messages[] = 'Rozmiar przesłanego pliku jest za duży(MAX 1024Kb)';
            return false;
        }

        if(!isset($file['type']) && !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->messages[] = 'Nie można przesłać tego typu pliku';
            return false;
        }
        return true;
    }
}