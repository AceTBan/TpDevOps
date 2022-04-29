<?php

include('../config/bdd.php');
include('../models/users.php');

if ( !empty($_POST['loginUser']) && !empty($_POST['mdp']) ) {
    $loginUser = $_POST['loginUser'];
    $mdp = $_POST['mdp'];  
    
    try{
        $myUser = new Users();
        $myUser->setLoginUsers($loginUser);
        $myUser->setMdpUsers($mdp);

        $req = $myUser->readUser();

        while ($donnees = $req->fetch()) {
            
            session_start();
            $_SESSION['loginUser'] = $donnees['loginUser'];
            $_SESSION['prenom'] = $donnees['prenom'];
            $_SESSION['nom'] = $donnees['nom'];
            echo '<p> Bienvenue : '. $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . '</p>';
            header('Location: ../index.php');
        }
        
    } 
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

}
    
?>