<?php
include('../models/matchs.php');
include('../config/bdd.php');
include('../views/listeView.php');

$animaux = new Matchs();

$animaux->readAllJoueur();

$allMatchs = $matchs->readAllJoueur();

while($donnees = $allMatchs->fetch()){
    $dateMatchs = $donnees['dateMatchs'];
    $lieuMatchs = $donnees['lieuMatchs'];
    $nomJoueur = $donnees['nomJoueur'];
    $prenomJoueur = $donnees['prenomJoueur'];
    include('../views/carteMatchs.php');
}
?>