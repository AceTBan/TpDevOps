
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="../index.php" class="w3-bar-item w3-button"><b>PR</b> Parions Tennis</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
            <a href="../index.php" class="w3-bar-item w3-button">Accueil</a>
            <a href="../controllers/liste.php" class="w3-bar-item w3-button">Matchs</a>
            <?php
                        session_start();
                        if (!isset($_SESSION['loginUser'])){
                        echo '<a href="../views/inscription.php" class="w3-bar-item w3-button">Inscription</a>
                            <a href="../views/connexion.php" class="w3-bar-item w3-button">Connexion</a>';}
                        else{
                        echo '<a href="../views/profil.php" class="w3-bar-item w3-button">Profil</a>
                            <a href="../controllers/deconnect.php" class="w3-bar-item w3-button">Déconnexion</a>';}?>
            </div>
        </div>
    </div>