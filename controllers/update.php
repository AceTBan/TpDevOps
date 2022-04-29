<?php
    include('../models/users.php');
    include('../config/bdd.php');
    include('../views/misajour.php');

    $users = new Users();
    $allUsers = $users->readAll();
    if(
        !empty($_GET['idUsers'])
        && !empty($_GET['nom'])
        && !empty($_GET['prenom'])
        && !empty($_GET['mdp'])
        && !empty($_GET['loginUser'])   

    ){      
        $idAnimal = $_GET['idUsers'];
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $mdp = $_GET['mdp'];
        $loginUser = $_GET['loginUser'];
        
        try{
            
            $users = new Users();
            $users->setIdUsers($idAnimal);
            $users->setNomUsers($nom);
            $users->setPrenomUsers($couleur);
            $users->setMdpUsers($origines);
            $users->setLoginUsers($idRace);

            $oneUser = $users->updateUser();
            echo "<h6>Vous venez de modifier votre profil </h6> ";
            header('Location: ../profil.php');
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
?>
