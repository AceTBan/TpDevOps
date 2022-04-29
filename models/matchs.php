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

        public function readMatchs(){
            $myQuery = 'SELECT nomJoueur, prenomJoueur, classementJoueur, dateMatchs, lieuMatchs 
            FROM joueur 
            INNER JOIN jouer 
            ON jouer.idJoueur = joueur.idJoueur
            INNER JOIN matchs 
            ON matchs.idMatchs = jouer.idMatchs
            ORDER BY dateMatchs desc
            '; 

            $stmt = $this->connect->prepare($myQuery);
            $stmt->execute();
            return $stmt;
        }
    }       
?>