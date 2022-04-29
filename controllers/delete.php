<?php

include('../models/users.php');
include('../config/bdd.php');
include('../views/supprimer.php');

if (!empty($_POST['nom'])){

    $nom = $_POST['nom'];
    $users = new Users();
    $users->setNomUsers($nom);
    
    $myUser = $users->readSingle();
    echo '<div> ';
    while($donnees = $myUser->fetch()) {
        $toDelete = new Users();
        $toDelete->setIdUsers($donnees['idUsers']);
        $nom = $donnees['nom'];
        $prenom = $donnees['prenom'];
        $mdp = $donnees['mdp'];
        $loginUser = $donnees['loginUser'];
        $toDelete->deleteUser();
        echo 'Votre '. $donnees['nom']. ' a bien été supprimé !';
    };
    session_destroy();
    header('Location: ../index.php');
    echo '</div>';
}

?>