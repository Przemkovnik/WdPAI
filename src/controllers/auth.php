<?php
function login(string $email, string $password, bool $remember = false): bool
    {

    $user = find_user_by_username($email);

    if ($user && is_user_active($user) && password_verify($password, $user['password'])) {

    log_user_in($user);

    if ($remember) {
        remember_me($user['id']);
    }
        return true;
    }
        return false;
    }


    /**
     * log a user in
     * @param array $user
     * @return bool
     */
    function log_user_in(array $user): bool
    {
        // prevent session fixation attack
        if (session_regenerate_id()) {
            // set username & id in the session
            $_SESSION['legal_name'] = $user['legal_name'];
            $_SESSION['user_id'] = $user['id'];
            return true;
        }

        return false;
    }

    function remember_me(int $user_id, int $day = 30)
    {
    [$selector, $validator, $token] = generate_tokens();

    // remove all existing token associated with the user id
    delete_user_token($user_id);

    // set expiration date
    $expired_seconds = time() + 60 * 60 * 24 * $day;

    // insert a token to the database
    $hash_validator = password_hash($validator, PASSWORD_DEFAULT);
    $expiry = date('Y-m-d H:i:s', $expired_seconds);

    if (insert_user_token($user_id, $selector, $hash_validator, $expiry)) {
        setcookie('remember_me', $token, $expired_seconds);
    }
}

function logout(): void
{
    if (is_user_logged_in()) {

        // delete the user token
        delete_user_token($_SESSION['user_id']);

        // delete session
        unset($_SESSION['legal_name'], $_SESSION['user_id`']);

        // remove the remember_me cookie
        if (isset($_COOKIE['remember_me'])) {
            unset($_COOKIE['remember_me']);
            setcookie('remember_user', null, -1);
        }

        // remove all session data
        session_destroy();

        // redirect to the login page
        redirect_to('login');
    }
}

function is_user_logged_in(): bool
{
    // check the session
    if (isset($_SESSION['legal_name'])) {
        return true;
    }

    // check the remember_me in cookie
    $token = filter_input(INPUT_COOKIE, 'remember_me', FILTER_SANITIZE_STRING);

    if ($token && token_is_valid($token)) {

        $user = find_user_by_token($token);

        if ($user) {
            return log_user_in($user);
        }
    }
    return false;
}
?>