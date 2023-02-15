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
        $userRepository = new UserRepository();

        if(!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST["email"];

        $password = $_POST["password"];

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

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/personnel");
    }

    public function register()
    {
        

        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $legal_name = $_POST['legal_name'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Powtórz hasło poprawnie']]);
        }

        //BCRYPT
        $user = new User($email, password_hash($password, PASSWORD_BCRYPT), $legal_name);


        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['Twoje konto zostało zarejestrowane']]);
    }
}