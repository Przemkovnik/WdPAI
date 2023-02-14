<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="public/css/style.css">
        <link rel="stylesheet" type="text/css" href="public/css/register.css">
        <script defer src="/../public/js/global.js"></script>
        <script defer src="/../public/js/validation/form_field.js"></script>
        <script defer src="/../public/js/validation/form_validator.js"></script>
        <script defer src="/../public/js/validation/app.js"></script>
        <title>REGISTER PAGE</title>
    </head>
    <body>
        <div class="overlay"></div>
            <!-- header section -->
                <?php include "header.php";?>
            <!-- main section -->
                <div class="grow">
                    <main>
                        <div class="master-container">
                            <div class="reg-container">
                                <form novalidate autocomplete="off" id="form" class="registration-form" action="register" method="POST">
                                    <h2>Rejestracja</h2>

                                    <div class="messages">
                                        <?php
                                        if(isset($messages)){
                                            foreach($messages as $message) {
                                                echo $message;
                                            }
                                        }
                                        ?>
                                    </div>

                                    <div class="field-control">
                                        <label for="username">Imię Nazwisko</label>
                                        <input name="legal_name" type="text" id="username" minlength="6" maxlength="35"
                                        placeholder="Wpisz Imię Nazwisko" >
                                        <span>Błąd</span>
                                    </div>
                                    <div class="field-control">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" id="email" 
                                        placeholder="Wpisz email" >
                                        <span>Błąd</span>
                                    </div>
                                    <div class="field-control">
                                        <label for="password">Hasło</label> 
                                        <input name="password" type="password" id="password" minlength="8" maxlength="35"
                                        placeholder="Wpisz hasło" >
                                        <span>Błąd</span>
                                    </div>
                                    <div class="field-control">
                                        <label for="password2">Hasło ponownie</label> 
                                        <input name="confirmedPassword" type="password" id="password2" minlength="8" maxlength="35"
                                        data-match-witch-password-id="#password"
                                        placeholder="Powtórz hasło" >
                                        <span>Błąd</span>
                                    </div>
                                    <button class="register-button" type="submit">Zarejestruj się</button>
                                </form>
                            </div>
                        </div>
                    </main>
                </div>
        <!-- footer section -->
            <?php include "footer.php";?>
        <!-- cookies banner section -->
            <?php include "cookiesBanner.php";?>
        <!-- back to the top section -->
            <?php include "arrowTop.php";?>
    </body>
</html>