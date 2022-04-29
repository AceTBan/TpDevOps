<?php
class Joueur{
    // Attribut
    private $idJoueur;
    private $nomJoueur;
    private $prenomJoueur; 
    private $classementJoueur;

        //attribue de stockage info de connexion bdd
        public $connect;

        //constructeur
        public function __construct(){
            $this->connect = new ConfigDb();
            $this->connect = $this->connect->getConnection();
        }

        // getter 
        public function getIdJoueur(){
            return $this-> idJoueur;
        }

        public function getNameJoueur(){
            return $this-> nomJoueur;
        }

        public function getPrenomJoueur(){
            return $this-> prenomJoueur;
        }

        public function getClassementJoueur(){
            return $this-> classementJoueur;
        }

        // setter
        public function setIdJoueur($nouvelId){
            $this->idJoueur = intval($nouvelId, 10);
        }

        public function setNomJoueur($nouveauxNom){
            $this->nomJoueur = $nouveauxNom;
        }

        public function setPrenomJoueur($nouveauxPrenom){
            $this->prenomJoueur = $nouveauxPrenom;
        }

        public function setClassementJoueur($nouveauxClassement){
            $this->classementJoueur = $nouveauxClassement;
        }

        // fonctions CRUD
        public function readAllJoueur(){
            $myQuery = 'SELECT * FROM joueur';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->execute();
            return $stmt;
        }

        public function readSingleJoueur(){
            $myQuery = 'SELECT * FROM joueur WHERE nomJoueur=:nomJoueur';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nomJoueur', $this->nomJoueur);
            $stmt->execute();
            return $stmt;
        }
    }       
?>