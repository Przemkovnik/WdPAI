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

        //zastosuj BCRYPT
        $password = md5($_POST["password"]);

        $user = $userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['Podany użytkownik nie istnieje!']]);
        }

        if($user->getEmail() !== $email) {
            return $this->render('login', ['messages' =>['Użytkownik o podanym e-mail\'u nie istnieje!']]);
        }

        if($user->getPassword() !== $password) {
            return $this->render('login', ['messages' =>['Podano niepoprawne hasło!']]);
        }
        //tu decyzja, gdzie nas przekieruje po poprawnym autentykacji
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

        // $userRepository = new UserRepository();
        // var_dump($userRepository);
        // $user = $userRepository->getUser($email);
        // var_dump($user);
        // if($user->getEmail() == $email) {
        //     return $this->render('register', ['messages' =>['Użytkownik o podanym e-mail\'u już istnieje!']]);
        // }

        // $user = $userRepository->getUser($legal_name);
        // if($user->getLegalName() == $legal_name) {
        //     return $this->render('register', ['messages' =>['Użytkownik o tych danych osobowych już istnieje!']]);
        // }

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Powtórz hasło poprawnie']]);
        }

        //BCRYPT
        $user = new User($email, md5($password), $legal_name);
//        $user->setPhone($phone);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['Twoje konto zostało zarejestrowane']]);
    }
}