<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {
        $this->render('login');
    }

    public function login() {
        $this->render('login');
    }

    public function home() {
        $this->render('home');
    }

    public function personnel() {
        $this->render('personnel');
    }
}