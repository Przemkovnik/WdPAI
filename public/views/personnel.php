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
        <link rel="stylesheet" type="text/css" href="public/css/personnel.css">
        <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
        <script defer src="/../public/js/global.js"></script>
        <script defer src="/../public/js/search_personnel.js"></script>
        <script defer src="/../public/js/karma_counter.js"></script>
        <title>PERSONNEL PAGE</title>
    </head>
    <body>
        <div class="overlay"></div>
        <!-- header section -->
            <?php include "header.php";?>
        <!-- main section -->
            <div class="grow">
                <main>
                    <h1 class="title">Nasz wspaniały personel</h1>
                    <div class="search-bar">
                        <input placeholder="Wyszukaj członka personelu">
                    </div>
                    <div class="wrapper-personnel">
                        <?php foreach($personnels as $personnel): ?>
                            <div class="person" id="<?= $personnel->getId() ?>">
                                <div class="front">
                                    <img src="public/img/personnel/<?= $personnel->getImage() ?>" alt="person1 image">
                                </div>
                                <div class="back">
                                    <div class="back-content">
                                        <div class="pname"><?= $personnel->getTitle() ?></div>
                                        <div class="description"><?= $personnel->getDescription() ?></div>
                                        <div class="specialisation"><p><?= $personnel->getSpecialisation() ?></p></div>
                                        <div class="social-section">
                                            <i class="lni lni-smile"><?= $personnel->getLike() ?></i>
                                            <i class="lni lni-sad"><?= $personnel->getDislike() ?></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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