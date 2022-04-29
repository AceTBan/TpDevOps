<?php
include('../models/matchs.php');
include('../config/bdd.php');
include('../views/listeMatchs.php');

$matchs = new Matchs();
$allMatchs = $matchs->readMatchsU();

$nomJoueur = null;

while($donnees = $allMatchs->fetch()){
    echo '<div class="w3-content" style="max-width:1564px">';
    if($nomJoueur==null){
    $dateMatchs = $donnees['dateMatchs'];
    $lieuMatchs = $donnees['lieuMatchs'];
    $nomJoueur = $donnees['nomJoueur'];
    $prenomJoueur = $donnees['prenomJoueur'];
    echo $dateMatchs, '<br>';
    echo $lieuMatchs, '<br>';
    echo $prenomJoueur, ' ', $nomJoueur ,'<br>';
    echo '<form id="form_text" action="../controllers/parier.php" method="POST">
    <input type="text" name="mise" placeholder="Montant" id="mise" required>
    <button type="submit" value="Valider">Parier</button>
    </form>';
    }
    else if ($nomJoueur!=null){
        $nomJoueur2 = $donnees['nomJoueur'];
        $prenomJoueur2 = $donnees['prenomJoueur'];
        echo $prenomJoueur2, ' ', $nomJoueur2 ,'<br>';
        $nomJoueur = null;
        echo '<form id="form_text" action="../controllers/parier.php" method="POST">
        <input type="text" name="mise" placeholder="Montant" id="mise" required>
        <button type="submit" value="Valider">Parier</button>
        </form>';
        echo '<br>';
        echo '</div>'; 
    }
}
?>