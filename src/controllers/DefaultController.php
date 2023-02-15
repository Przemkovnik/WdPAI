<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {
        $this->render('home');
    }

    public function login() {
        $this->render('login');
    }

    public function home() {
        $this->render('home');
    }

    public function contact() {
        $this->render('contact');
    }

    public function logout() {
        $this->render('logout');
    }
}