<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('home', 'DefaultController');
Router::get('login', 'DefaultController');
Router::get('personnel', 'PersonnelController');
Router::get('contact', 'DefaultController');
Router::get('like', 'PersonnelController');
Router::get('dislike', 'PersonnelController');

Router::post('login', 'SecurityController');
Router::post('addPersonnel', 'PersonnelController');
Router::post('register', 'SecurityController');
Router::post('search', 'PersonnelController');
Router::post('contact', 'ContactController');
Router::post('logout', 'DefaultController');
Router::post('remember', 'DefaultController');

Router::run($path);