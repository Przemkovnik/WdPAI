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
        <link rel="stylesheet" type="text/css" href="public/css/personnel.css">
        <script defer src="/../public/js/global.js"></script>
        <title>PERSONNEL PAGE</title>
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
                        <li><a href="personnel.html" class="active">PERSONEL</a></li>
                        <li><a href="contact.php">KONTAKT</a></li>
                    </ul>
                </nav>
            </header>
        <!-- main section -->
            <div class="grow">
                <main>
                    <h1 class="title">Nasz wspaniały personel</h1>
                    <div class="wrapper-personnel">
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/<?= $personnel->getImage() ?>">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname"><?= $personnel->getTitle() ?></div>
                                    <div class="description"><?= $personnel->getDescription() ?></div>
                                    <div class="specialisation"><p><?= $personnel->getSpecialisation() ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/1.jpeg" alt="person1 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">dr Linda Martin</div>
                                    <div class="description">Ukończyła Uniwersytet Medyczny w Poznaniu. Doktorantka tejże uczelni.</div>
                                    <div class="specialisation"> <p>Specjalista endokrynolog</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/2.jpg" alt="person2 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">dr Kamil Bąk</div>
                                    <div class="description">Ukończył Uniwersytet Medyczny w Katowicach. Doktorant tejże uczelni.</div>
                                    <div class="specialisation"> <p>Specjalista urolog</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/5.jpg" alt="person3 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">dr Antoni Kruk</div>
                                    <div class="description">Ukończyła Uniwersytet Medyczny w Gdańsku. Doktorantk tejże uczelni.</div>
                                    <div class="specialisation"> <p>Specjalista ortopeda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/3.jpg" alt="person4 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">dr Grzegorz Lipka</div>
                                    <div class="description">Ukończył Uniwersytet Medyczny w Padwie. Wykładowca UJ.</div>
                                    <div class="specialisation"> <p>Specjalista kardiolog</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/4.jpg" alt="person5 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">dr Wojciech Kowal</div>
                                    <div class="description">Ukończył Wyższą Szkołę Bractwa Stali. Wykładowca tejże uczelni.</div>
                                    <div class="specialisation"> <p>Specjalista alergolog</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/6.jpg" alt="person6 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">dr Eliza Wytrwała</div>
                                    <div class="description">Ukończyła Uniwersytet Medyczny w Szczecinie. Wieloletni praktyk terapii manualnych</div>
                                    <div class="specialisation"> <p>Specjalista rehabilitant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/nurse-1.jpg" alt="person7 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">mgr Marta Babiuch</div>
                                    <div class="description">Ukończyła Uniwersytet Medyczny w Katowicach.</div>
                                    <div class="specialisation"> <p>Mgr pielęgniarstwa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/nurse-2.jpg" alt="person8 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">mgr Katarzyna Słoneczko</div>
                                    <div class="description">Ukończyła Uniwersytet Medyczny w Kutnie.</div>
                                    <div class="specialisation"> <p>Mgr pielęgniarstwa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/nurse-3.jpg" alt="person9 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">mgr Zofia Niedbała</div>
                                    <div class="description">Ukończyła Uniwersytet Medyczny w Szczytnie.</div>
                                    <div class="specialisation"> <p>Specjalista rehibilitant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/7.jpg" alt="person10 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">dr Ryszard Kutek</div>
                                    <div class="description">Ukończył Uniwersytet Medyczny w Poznaniu. Doktorant tejże uczelni.</div>
                                    <div class="specialisation"> <p>Specjalista okulista</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="person">
                            <div class="front">
                                <img src="public/img/personnel/8.jpg" alt="person11 image">
                            </div>
                            <div class="back">
                                <div class="back-content">
                                    <div class="pname">dr Mirosław Szczęsniak</div>
                                    <div class="description">Ukończył Uniwersytet Medyczny w Krakowie.</div>
                                    <div class="specialisation"> <p>Specjalista podolog</p>
                                    </div>
                                </div>
                            </div>
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