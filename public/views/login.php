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
        <link rel="stylesheet" type="text/css" href="public/css/login.css">
        <script defer src="/../public/js/global.js"></script>
        <script defer src="/../public/js/validation/script.js"></script>
        <title>LOGIN PAGE</title>
    </head>
    <body>
        <div class="overlay"></div>
        <!-- header section -->
            <?php include "header.php";?>
        <!-- form section -->
            <div class="grow">
                <main>
                    <div class="wrapper-login">
                        <form autocomplete="off" action="login" method="POST">
                            <div class="form__icon" aria-hidden="true"></div>
                            <div class="message">
                                <?php if(isset($messages)) {
                                    foreach ($messages as $message) {
                                        echo $message;
                                    }
                                }
                                ?>
                            </div>
                            <div class="form__input-container">
                                <input id="user" name="email" aria-label="User" type="text" placeholder=" ">
                                <label for="user">E-mail</label>
                            </div>
                            <div class="form__input-container">
                                <input id="password" name="password" aria-label="Password" type="password" placeholder=" ">
                                <label for="password">Hasło</label>
                            </div>
                            <div class="form__spacer" aria-hidden="true"></div>
                            <button type="submit" class="button3">Zaloguj</button>
                        </form>
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