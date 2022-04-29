<!DOCTYPE html>
<html>
<head>
<title>Accueil</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="./index.php" class="w3-bar-item w3-button"><b>PR</b> Parions Tennis</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
        <a href="./index.php" class="w3-bar-item w3-button">Accueil</a>
        <a href="./controllers/liste.php" class="w3-bar-item w3-button">Matchs</a>
        <?php
                    session_start();
                    if (!isset($_SESSION['loginUser'])){
                    echo '<a href="./views/inscription.php" class="w3-bar-item w3-button">Inscription</a>
                        <a href="./views/connexion.php" class="w3-bar-item w3-button">Connexion</a>';}
                    else{
                    echo '<a href="../views/profil.php" class="w3-bar-item w3-button">Profil</a>
                        <a href="./controllers/deconnect.php" class="w3-bar-item w3-button">Déconnexion</a>';}?>
        </div>
    </div>
    </div>

    <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="./img/kirill-zharkiy-ItKtQ-OaIzQ-unsplash.jpg" alt="tennis" width="100%" height="200">
    <div class="w3-display-middle w3-margin-top w3-center">
        <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>PT</b></span> <span class="w3-hide-small w3-text-light-grey">Parions Tennis</span></h1>
    </div>
    </header>

    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">

        <!-- Matchs Section -->
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Matchs en cours</h3>
        </div>

        <div class="w3-row-padding">
            <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Roland Garros</div>
                <img src="./img/valentin-balan-k0aVMMZwqtU-unsplash.jpg" alt="cour" style="width:100%">
            </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Wimbledon</div>
                <img src="./img/valentin-balan-k0aVMMZwqtU-unsplash.jpg" alt="cour" style="width:100%">
            </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">US Open</div>
                <img src="./img/valentin-balan-k0aVMMZwqtU-unsplash.jpg" alt="cour" style="width:100%">
            </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Open Australie</div>
                <img src="./img/valentin-balan-k0aVMMZwqtU-unsplash.jpg" alt="cour" style="width:100%">
            </div>
            </div>
        </div>

            <!-- STAR Section -->
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Les joueurs les mieux notés </h3>
        </div>
        <div class="w3-row-padding w3-grayscale">
            <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="./img/nadal_head_ao20.png" alt="RN" style="width:100%">
            <h3>Rafael Nadal</h3>
            <p class="w3-opacity">Espagne</p>
            <p>Rafael Nadal Parera, simplement dit Rafael Nadal, est un joueur de tennis espagnol, professionnel depuis 2001, né le 3 juin 1986 à Manacor, sur l'île de Majorque, dans l'archipel des Baléares.
                Il est considéré par tous les spécialistes comme le meilleur joueur sur terre battue de l'histoire du tennis</p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="./img/djokovic_head.png" alt="ND" style="width:100%">
            <h3>Novak Djokovic</h3>
            <p class="w3-opacity">Serbie</p>
            <p>Novak Djokovic, est un joueur de tennis serbe, professionnel depuis 2003. Considéré, avec Roger Federer et Rafael Nadal, comme l'un des meilleurs joueurs de tennis de tous les temps, Novak Djokovic a remporté 86 titres en simple sur le circuit ATP, dont 20 tournois du Grand Chelem, cinq Masters et 37 Masters 1000.</p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="./img/player161.png" alt="MD" style="width:100%">
            <h3>Daniil Medvedev</h3>
            <p class="w3-opacity">Russie</p>
            <p>Daniil Sergeyevich Medvedev, né le 11 février 1996 à Moscou, est un joueur de tennis russe, professionnel depuis 2014. Il comptabilise treize titres sur le circuit ATP dont l'US Open 2021. Il est le troisième tennisman russe à être sacré en Grand Chelem, succédant à Ievgueni Kafelnikov et Marat Safin.</p>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="./img/ruud_head_ao20.png" alt="RC" style="width:100%">
            <h3>Ruud Casper</h3>
            <p class="w3-opacity">Norvège</p>
            <p>Casper Ruud, né le 22 décembre 1998 à Oslo, est un joueur de tennis norvégien, professionnel depuis 2015.
                En 2020, il devient le premier Norvégien à remporter un tournoi sur le circuit ATP. </p>
            </div>
        </div>

    <!-- End page content -->
    </div>


    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16">
    <p>Adrar Project by Romain, David, Teddy and Johan</p>
    </footer>

</body>
</html>