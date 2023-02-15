<?php

session_start();

unset($_SESSION['user_legal_name']);
session_destroy();

return $this->render('login', ['messages' =>['Poprawnie wylogowano użytkownika z systemu!']]);

?>