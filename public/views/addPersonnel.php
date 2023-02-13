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
        <header>
            <a class="logo" href="home.php"><img src="public/img/logo.svg" alt="SUPERB-MED LOGO"></a>
            <nav>
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="personnel.php" class="active">PERSONEL</a></li>
                    <li><a href="contact.html">KONTAKT</a></li>
                </ul>
            </nav>
        </header>
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
        <footer class="footer">
            <div class="container">
                Przemyslaw Bryla &copy; 2023
            </div>
        </footer>
    <!-- cookies banner section -->
        <section class="cookies-banner">
            <div class="container">
                <div class="cookies-banner-text">
                    <h1>Ta strona używa plików cookies.</h1>
                    <p>Zamykając ten baner wyrażasz zgodę na zbieranie danych o Twoich aktywnościach prowadzonych na stronie.</p>
                </div>
                <div class="cookies-banner-button">
                    <a href="#" class="button button-orange button2">Zamknij</a>
                </div>
            </div>
        </section>
    <!-- back to the top section -->
        <button class="back-to-top hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="back-to-top-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
            </svg>
        </button>
</body>
</html>