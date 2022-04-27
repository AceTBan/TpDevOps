<?php
include('../models/matchs.php');
include('../config/bdd.php');
include('../views/listeView.php');

$matchs = new Matchs();

$matchs->readAllJoueur();

$allMatchs = $matchs->readAllJoueur();
$listeJoueur = array();
while($donnees = $allMatchs->fetch()){
    $nomJoueur = $donnees['nomJoueur'];
    $prenomJoueur = $donnees['prenomJoueur'];

    $nomJoueur1 = $donnees['nomJoueur'];
    $prenomJoueur1 = $donnees['prenomJoueur'];
    // array_push($listeJoueur, [$nomJoueur, $prenomJoueur]);
    
    $dateMatchs = $donnees['dateMatchs'];
    $lieuMatchs = $donnees['lieuMatchs'];
    // include('../views/carteMatchs.php');

    echo $dateMatchs, '<br>';
    echo $lieuMatchs, '<br>';
    echo $nomJoueur , '<br>';
    echo $prenomJoueur, '<br>';

    // echo $nomjoueur1, '<br>';
    // echo $listeJoueur[0][0], " " , $listeJoueur[0][1];  
    // echo $listeJoueur[1][0], " " , $listeJoueur[1][1];
}
?>