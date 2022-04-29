<?php
class Matchs{
    // Attribut
    private $idMatchs;
    private $dateMatchs;
    private $lieuMatchs;

        //attribue de stockage info de connexion bdd
        public $connect;

        //constructeur
        public function __construct(){
            $this->connect = new ConfigDb();
            $this->connect = $this->connect->getConnection();
        }

        // getter 
        public function getIdMatchs(){
            return $this-> idMatchs;
        }

        public function getDateMatchs(){
            return $this-> dateMatchs;
        }

        public function getLieu(){
            return $this-> lieuMatchs;
        }

        // setter
        public function setIdMatchs($nouvelId){
            $this->idMatchs = intval($nouvelId, 10);
        }

        public function setDateMatchs($nouvelleDate){
            $this->nom = $nouvelleDate;
        }

        public function setLieu($nouveauxLieu){
            $this->lieu = $nouveauxLieu;
        }

        // fonctions CRUD
        public function readAllMatchs(){
            $myQuery = 'SELECT * FROM matchs ORDER BY dateMatchs';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->execute();
            return $stmt;
        }

        public function readSingleMatchs(){
            $myQuery = 'SELECT * FROM matchs WHERE idMatchs=:idMatchs';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':idMatchs', $this->idMatchs);
            $stmt->execute();
            return $stmt;
        }

        public function readMatchs1(){
            $myQuery = 'SELECT nomJoueur, prenomJoueur, classementJoueur, dateMatchs, lieuMatchs , idJoueur2
            FROM joueur 
            INNER JOIN jouer 
            ON jouer.idJoueur1 = joueur.idJoueur
            OR jouer.idJoueur2 = joueur.idJoueur
            INNER JOIN matchs 
            ON matchs.idMatchs = jouer.idMatchs
            WHERE dateMatchs = dateMatchs
            ORDER BY dateMatchs desc
            '; 

            $stmt = $this->connect->prepare($myQuery);
            $stmt->execute();
            return $stmt;
        }

        public function readMatchsU(){
            $myQuery ='SELECT nomJoueur, prenomJoueur, dateMatchs, lieuMatchs FROM joueur
            JOIN jouer ON joueur.idJoueur = jouer.idJoueur1 
            OR joueur.idJoueur = jouer.idJoueur2
            JOIN matchs ON matchs.idMatchs = jouer.idMatchs
            ';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->execute();
            return $stmt;
        }
    }       
?>