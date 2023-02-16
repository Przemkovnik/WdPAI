<?php

session_start();

unset($_SESSION['session_id']);
unset($_SESSION['user_legal_name']);

session_destroy();

$days = 1;
setcookie ("rememberme","", time() - ($days * 24 * 60 * 60) );

return $this->render('login', ['messages' =>['Poprawnie wylogowano użytkownika z systemu!']]);

?>