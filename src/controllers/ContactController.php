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

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $contact_legal_name = $_POST['contact_legal_name'];
        if (empty($_POST["contact_legal_name"])) {
            return $this->render('contact', ['messages' => ['Musisz podać Imię Nazwisko!']]);
        } 
        else {
            $contact_legal_name = test_input($_POST["contact_legal_name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$contact_legal_name)) {
                return $this->render('contact', ['messages' => ['Możesz wpisać wyłącznie litery(bez polskich znaków) oraz białe znaki!']]);
            }
        }

        $contact_phone = $_POST['contact_phone'];
        if (empty($_POST["contact_phone"])) {
            return $this->render('contact', ['messages' => ['Musisz podać numer telefonu!']]);
        }

        $contact_email = $_POST['contact_email'];
        if (empty($_POST["contact_email"])) {
            return $this->render('contact', ['messages' => ['Musisz podać email!']]);
        } else {
            $contact_email = test_input($_POST["contact_email"]);
            if (!filter_var($contact_email, FILTER_VALIDATE_EMAIL)) {
                return $this->render('contact', ['messages' => ['Wpisano niepoprawny format email!']]);
            }
        }

        $contact_topic = $_POST['contact_topic'];
        if (empty($_POST["contact_topic"])) {
            return $this->render('contact', ['messages' => ['Musisz podać temat wiadomości!']]);
        }

        $contact_message = $_POST['contact_message'];
        if (empty($_POST["contact_message"])) {
            return $this->render('contact', ['messages' => ['Musisz napisać wiadomość!']]);
        }


        $contact = new Contact($contact_legal_name, $contact_phone, $contact_email, $contact_topic, $contact_message);

        $this->contactRepository->addContact($contact);

        return $this->render('contact', ['messages' => ['Twoja wiadomość została wysłana do centrali!']]);
    }
}