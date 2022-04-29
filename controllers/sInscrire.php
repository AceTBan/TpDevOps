<?php

include('../config/bdd.php');
include('../models/users.php');

if (
    !empty($_POST['nom'])
    && !empty($_POST['prenom'])
    && !empty($_POST['mdp'])
    && !empty($_POST['loginUser'])
) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pwd = $_POST['mdp'];
    $pseudo = $_POST['loginUser'];
    
    
    try{
        $user = new Users();
        $user->setNomUsers($nom);
        $user->setPrenomUsers($prenom);
        $user->setLoginUsers($pseudo);
        $user->setMdpUsers($pwd);
        $resultat = $user->createUser();
        header('Location: ../index.php');

    } catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

}


    
?>