<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Supprimer</title>
</head>
<body>
    <?php
        include('../views/inc/header.php')
    ?>
    <div class="w3-container w3-padding-32" id="projects">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Supprimer votre compte</h3>
    </div>
    <div>
        <div>
            <form id="form_text" action="../controllers/delete.php" method="POST">
                <label for="cheese">Préciser votre nom pour supprimer votre compte</label>
                <input type="text" name="nom" placeholder="Nom" id="nom">
                <button type="submit" value="Valider">Supprimer</button>
            </form>
        </div>
    </div>

</body>
</html>