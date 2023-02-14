<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Contact.php';
require_once __DIR__.'/../repositories/ContactRepository.php';

class ContactController extends AppController {

    private $contactRepository;

    public function __construct()
    {
        parent::__construct();
        $this->contactRepository = new ContactRepository();
    }

    public function contact()
    {

        if (!$this->isPost()) {
            return $this->render('contact');
        }

        $contact_legal_name = $_POST['contact_legal_name'];
        $contact_phone = $_POST['contact_phone'];
        $contact_email = $_POST['contact_email'];
        $contact_topic = $_POST['contact_topic'];
        $contact_message = $_POST['contact_message'];

        $contact = new Contact($contact_legal_name, $contact_phone, $contact_email, $contact_topic, $contact_message);

        $this->contactRepository->addContact($contact);

        return $this->render('contact', ['messages' => ['Twoja wiadomość została wysłana do centrali!']]);
    }
}