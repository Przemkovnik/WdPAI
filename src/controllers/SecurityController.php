<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repositories/UserRepository.php';

class SecurityController extends AppController {

    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        session_start();

        $userRepository = new UserRepository();

        if(!$this->isPost()) {
            return $this->render('login');
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = $_POST["email"];
        if (empty($_POST["email"])) {
            return $this->render('login', ['messages' => ['Musisz podać email!']]);
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $this->render('login', ['messages' => ['Wpisano niepoprawny format email!']]);
            }
        }

        $password = $_POST["password"];
        if (empty($_POST["password"])) {
            return $this->render('login', ['messages' => ['Musisz podać hasło!']]);
        }

        $user = $userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['Podany użytkownik nie istnieje!']]);
        }

        if($user->getEmail() !== $email) {
            return $this->render('login', ['messages' =>['Użytkownik o podanym e-mail\'u nie istnieje!']]);
        }

        if(!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' =>['Podano niepoprawne hasło!']]);
        }

        $_SESSION['user_legal_name'] = $user->getLegalName();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }

    // public function logout() {
        
    //     session_start();

    //     unset($_SESSION['user_legal_name']);
    //     session_destroy();

    //     return $this->render('login', ['messages' =>['Poprawnie wylogowano użytkownika z systemu!']]);

    // }

    public function register()
    {
        

        if (!$this->isPost()) {
            return $this->render('register');
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $legal_name = $_POST['legal_name'];
        if (empty($_POST["legal_name"])) {
            return $this->render('register', ['messages' => ['Musisz podać Imię Nazwisko!']]);
        } 
        else {
            $legal_name = test_input($_POST["legal_name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$legal_name)) {
                return $this->render('register', ['messages' => ['Możesz wpisać wyłącznie litery oraz białe znaki!']]);
            }
        }

        $email = $_POST['email'];
        if (empty($_POST["email"])) {
            return $this->render('register', ['messages' => ['Musisz podać email!']]);
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $this->render('register', ['messages' => ['Wpisano niepoprawny format email!']]);
            }
        }

        $password = $_POST['password'];
        if (empty($_POST["password"])) {
            return $this->render('register', ['messages' => ['Musisz podać hasło!']]);
        }

        $confirmedPassword = $_POST['confirmedPassword'];
        if (empty($_POST["confirmedPassword"])) {
            return $this->render('register', ['messages' => ['Musisz podać hasło ponownie!']]);
        }


        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Powtórz hasło poprawnie!']]);
        }

        $user = new User($email, password_hash($password, PASSWORD_BCRYPT), $legal_name);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['Twoje konto zostało zarejestrowane pomyślnie!']]);
    }
}