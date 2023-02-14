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
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
        <script defer src="/../public/js/global.js"></script>
        <script defer src="/../public/js/search_personnel.js"></script>
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
                    <div class="search-bar">
                        <input placeholder="Wyszukaj członka personelu">
                    </div>
                    <div class="wrapper-personnel">
                        <?php foreach($personnels as $personnel): ?>
                            <div class="person">
                                <div class="front">
                                    <img src="public/img/personnel/<?= $personnel->getImage() ?>" alt="person1 image">
                                </div>
                                <div class="back">
                                    <div class="back-content">
                                        <div class="pname"><?= $personnel->getTitle() ?></div>
                                        <div class="description"><?= $personnel->getDescription() ?></div>
                                        <div class="specialisation"><p><?= $personnel->getSpecialisation() ?></p></div>
                                        <div class="social-section">
                                        <i class="lni lni-smile"> 600</i>
                                        <i class="lni lni-sad"> 600</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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
    <template id="personnel-template">
        <div class="person">
            <div class="front">
                <img src="" alt="person1 image">
            </div>
            <div class="back">
                <div class="back-content">
                    <div class="pname">Title</div>
                    <div class="description">Description</div>
                    <div class="specialisation"><p>Specialisation</p></div>
                    <div class="social-section">
                    <i class="lni lni-smile"> 0</i>
                    <i class="lni lni-sad"> 0</i>
                </div>
            </div>
        </div>
    </template>
</html>