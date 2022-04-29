<?php
include('../models/matchs.php');
include('../config/bdd.php');
include('../views/listeMatchs.php');

$matchs = new Matchs();
$allMatchs = $matchs->readMatchs();

$auto = 0 ;
$matchsArray = [];
while($donnees = $allMatchs->fetch()){

    if($auto ==0){
        $dateMatchs = $donnees['dateMatchs'];
        $lieuMatchs = $donnees['lieuMatchs'];
        $nomJoueur = $donnees['nomJoueur'];
        $prenomJoueur = $donnees['prenomJoueur'];
        $auto += 1 ;
    }
    else if ($auto == 1){
        $nomJoueur2 = $donnees['nomJoueur'];
        $prenomJoueur2 = $donnees['prenomJoueur'];
    }

    $matchsArray = [
        'dateMatchs' => $dateMatchs,
        'lieuMatchs' => $lieuMatchs,
        'nomJoueur' => $nomJoueur,
        'prenomJoueur' => $prenomJoueur,
        'nomJoueur2' => $nomJoueur2,
        'prenomJoueur2' => $prenomJoueur2
    ];

    array_push($matchsArray, $matchsArray);
    $auto = $auto%1;

    echo $matchsArray[0]['dateMatchs'], '<br>';
    echo $matchsArray[0]['lieuMatchs'], '<br>';
    echo $matchsArray[0]['prenomJoueur'], ' ', $matchsArray[0]['nomJoueur'] ,'<br>';
    echo $matchsArray[0]['prenomJoueur2'], ' ', $matchsArray[0]['nomJoueur2'] ,'<br>';
    echo '<br>';
}
?>