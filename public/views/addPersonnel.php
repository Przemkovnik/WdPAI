<?php
session_start();
if(!isset($_SESSION["user_legal_name"]))
    return $this->render('login', ['messages' =>['Aby móc przeglądać tę zawartość, musisz najpierw zalogować się do systemu!']]);
?>

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
        <link rel="stylesheet" type="text/css" href="public/css/addPersonnel.css">
        <script defer src="/../public/js/global.js"></script>
        <title>ADD PERSONNEL PAGE</title>
    </head>
    <body>
        <div class="overlay"></div>
        <!-- header section -->
            <?php include "header.php";?>
        <!-- main section -->
            <div class="grow">
                <main>
                    <div class="wrapper-address">
                        <div>
                            <h3 class="section-heading">Dodaj członka personelu</h3>
                            <p class="section-description">Podaj imię oraz nazwisko poprzedzone tytułem naukowym. Następnie uzupełnij dorobek naukowy. Potem podaj specjalizację. Po czym ałącz aktualne zdjęcie.</p>
                            <form action="addPersonnel" method="POST" ENCTYPE="multipart/form-data">
                                <?php if(isset($messages)) {
                                    foreach ($messages as $message) {
                                        echo $message;
                                    }
                                }
                                ?>
                                <input class="input-box" type="text" name="title" placeholder="Tytuł Imię Nazwisko"/>
                                <textarea class="input-box" name="description" rows="5" placeholder="Opis dorobku naukowego"></textarea>
                                <input class="input-box" type="text" name="specialisation" placeholder="Specjalizacja: "/>
                                <input class="input-box" type="file" name="file">
                                <input class="btn-submit" type="submit" value="Dodaj">
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