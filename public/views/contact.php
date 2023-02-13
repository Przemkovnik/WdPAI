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
        <link rel="stylesheet" type="text/css" href="public/css/contact.css">
        <script defer src="/../public/js/global.js"></script>
        <title>CONTACT PAGE</title>
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
                        <li><a href="personnel.php">PERSONEL</a></li>
                        <li><a href="contact.html" class="active">KONTAKT</a></li>
                    </ul>
                </nav>
            </header>
        <!-- main section -->
            <div class="grow">
                <main>
                    <div class="wrapper-address">
                        <div>
                            <h3 class="section-heading">Adresy naszych placówek</h3>
                            <p class="section-description">Pilnie rozwijający się konglomerat planuje w najbliższej przyszłości otworzyć kolejne dwie placówki.</p>
                            <h4 class="address-heading">Przychodnia Kwiatowo</h4>
                            <p class="address-lines">Kwiatowo<br>ul. Barokowa 16<br>Poniedziałek - Piątek : 7:00-15:00 <br>PrzychodniaKwiatowo@email.com</p>
                            <h4 class="address-heading">Przychodnia Mrągowo</h4>
                            <p class="address-lines">Mrągowo<br>ul. Główna 35<br>Poniedziałek - Piątek : 7:00-15:00 <br>PrzychodniaMrągowo@email.com</p>
                        </div>
                        <div>
                            <h3 class="section-heading">Napisz do nas</h3>
                            <p class="section-description">Jesteśmy gotowi konstruktywnie odpowiedzieć na każde pytanie. Wszelką korespondencję prosimy kierować poprzez poniższy formularz.</p>
                            <form>
                                <input class="input-box" type="text" name="name" placeholder="Imię Nazwisko" />
                                <input class="input-box" type="text" name="phone" placeholder="Numer Telefonu" />
                                <input class="input-box" type="text" name="subject" placeholder="Temat" />
                                <input class="input-box" type="email" name="email" placeholder="E-mail" />
                                <textarea class="input-box">Wiadomość</textarea>
                                <input class="btn-submit" type="submit" value="Wyślij">
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        <!-- footer section -->
            <div class="foot">
                <footer class="footer">
                    <div class="container">
                        Przemyslaw Bryla &copy; 2023
                    </div>
                </footer>
            </div>
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