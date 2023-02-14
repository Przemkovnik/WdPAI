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
        <script defer src="/../public/js/global.js"></script>
        <script defer src="/../public/js/gallery.js"></script>
        <title>HOME PAGE</title>
    </head>
    <body>
        <div class="overlay"></div>
        <!-- header section -->
            <?php include "header.php";?>
        <!-- main section -->
            <div class="wrapper">
                <div class="grow">
                    <main>
                        <div class="left-col">
                            <h1>Profesjonalna opieka w przystępnej cenie</h1>
                            <p class="subhead">
                                Nasza wykwalifikowana kadra podoła każdemu medycznemu wyzwaniu. Zgłoś się do nas już dziś! 
                            </p>
                            <div class="cta-btns">
                                <a href="register" class="primary-cta">ZAŁÓŻ NOWE KONTO</a>
                                <a href="personnel" class="secondary-cta">
                                    <span>Poznaj nasz zespół '23</span>
                                    <svg viewBox="0 0 19 9" fill="none">
                                        <path d="M18.3536 4.85355C18.5488 4.65829 18.5488 4.34171 18.3536 4.14645L15.1716 0.964466C14.9763 0.769204 14.6597 0.769204 14.4645 0.964466C14.2692 1.15973 14.2692 1.47631 14.4645 1.67157L17.2929 4.5L14.4645 7.32843C14.2692 7.52369 14.2692 7.84027 14.4645 8.03553C14.6597 8.2308 14.9763 8.2308 15.1716 8.03553L18.3536 4.85355ZM0 5H18V4H0V5Z" fill="black"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="news">
                                <p class="patients">20K</p>
                                <p class="details">
                                    Z dumą ogłaszamy, że nasza placówka, pomogła już ponad <strong>20tys.</strong> pacjentów. 
                                    Nasze anonimowe ankiety wykazują zadowolenie klienteli na poziomie ponad <strong>95%</strong>.
                                </p>
                            </div>
                        </div>
                        <div class="page-break">
                            <h1>Nasi najwybitniejsi spacjaliści</h1>
                        </div>
                        <div class="right-col">
                            <div class="page-break2">
                                <h1>Nasi najwybitniejsi spacjaliści</h1>
                            </div>
                            <div class="card card1">
                                <div class="card-details">
                                    <div>
                                        <a href="#" class="doctor-title">dr Linda Martin</a>
                                        <p>Specjalista endokrynolog</p>
                                    </div>
                                    <p class="doctor-price">149zł</p>
                                </div>
                            </div>
                            <div class="card card2">
                                <div class="card-details">
                                    <div>
                                        <a href="#" class="doctor-title">dr Kamil Bąk</a>
                                        <p>Specjalista urolog</p>
                                    </div>
                                    <p class="doctor-price">199zł</p>
                                </div>
                            </div>
                            <div class="card card3">
                                <div class="card-details">
                                    <div>
                                        <a href="#" class="doctor-title">dr Antoni Kruk</a>
                                        <p>Specjalista ortopeda</p>
                                    </div>
                                    <p class="doctor-price">249zł</p>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
        <!-- gallery section -->
                <div class="container2">
                    <h1 class="gal">Galeria</h1>
                    <ul class="gallery">
                        <li class="thumbnail"><img tabindex="0" src="public/img/gallery/1.jpg" alt=""></li>
                        <li class="thumbnail"><img tabindex="0" src="public/img/gallery/2.jpg" alt=""></li>
                        <li class="thumbnail"><img tabindex="0" src="public/img/gallery/3.jpg" alt=""></li>
                        <li class="thumbnail"><img tabindex="0" src="public/img/gallery/4.jpg" alt=""></li>
                        <li class="thumbnail"><img tabindex="0" src="public/img/gallery/5.jpg" alt=""></li>
                        <li class="thumbnail"><img tabindex="0" src="public/img/gallery/6.jpg" alt=""></li>
                        <li class="thumbnail"><img tabindex="0" src="public/img/gallery/7.jpg" alt=""></li>
                        <li class="thumbnail"><img tabindex="0" src="public/img/gallery/8.jpg" alt=""></li>
                        <li class="thumbnail"><img tabindex="0" src="public/img/gallery/9.jpg" alt=""></li>
                    </ul>
                    <div class="popup hidden">
                        <button aria-label="Close popup" class="popup__close">X</button>
                        <img src="" alt="" class="popup__img"></img> 
                        <button aria-label="Next photo" class="popup__arrow popup__arrow--right">></button>
                        <button aria-label="Previous photo" class="popup__arrow popup__arrow--left"><</button>
                    </div>
                </div>
            </div>
        <!-- footer section -->
            <?php include "footer.php";?>
        <!-- cookies banner section -->
            <?php include "cookiesBanner.php";?>
        <!-- back to the top section -->
            <?php include "arrowTop.php";?>
    </body>
</html>