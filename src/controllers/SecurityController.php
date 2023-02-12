<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController {
    public function login() {
        $user = new User('maca@email.com', 'janek111', 'Janek', 'Baryla');

        if(!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];

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
}