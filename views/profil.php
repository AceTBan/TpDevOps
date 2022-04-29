<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Profil</title>
</head>
<body>
    <?php
        include('../views/inc/header.php');
    ?>

    <div class="w3-content w3-padding" style="max-width:1564px">
        <!-- profil Section -->
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><?php echo 'Compte de'. ' ' .$_SESSION['nom'] . ' '. $_SESSION['prenom'] ?></h3>
            <a href="misajour.php"> Modifier votre compte </a>
            <div></div>
            <a href="supprimer.php"> Supprimer votre compte </a>
        </div>
        <!-- Paris Section -->
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Vos paris en cours</h3>
        </div>
    </div>
</body>
</html>