<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Connexion</title>
</head>
<body>
    <?php
        include('../views/inc/header.php');
    ?>

    <div class="w3-content w3-padding" style="max-width:1564px">
        <!-- Connexion Section -->
        <div class="w3-container w3-padding-32" id="projects">
            <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Connexion</h3>
        </div>
        <div>
            <div>
                <form id="form_text" action="../controllers/seConnecter.php" method="POST">
                    <label for="loginUser">Pseudo</label>
                    <input type="text" name="loginUser" placeholder="Login" id="loginUser" required>
                    <label for="mdp">Mot de passe</label>
                    <input type="text" name="mdp" placeholder="Mot de passe" id="mdp" required>        
                    <button type="submit" value="Valider">Connexion</button>
                    <a href="../views/inscription.php">Pas encore membre ?</a>
                </form>
            </div>
        </div>  
    </div>
</body>
</html>