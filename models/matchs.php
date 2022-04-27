<?php
class Matchs{
    // Attribut
    private $idMatchs;
    private $dateMatchs;
    private $lieuMatchs;
    private $idJoueur; 
    private $idJoueur1;

        //attribue de stockage info de connexion bdd
        public $connect;

        //constructeur
        public function __construct(){
            $this->connect = new ConfigDb();
            $this->connect = $this->connect->getConnection();
        }

        // getter 
        public function getIdMatchs(){
            return $this-> idJoueur;
        }

        public function getDateMatchs(){
            return $this-> dateMatchs;
        }

        public function getLieu(){
            return $this-> lieuMatchs;
        }

        public function getJoueur(){
            return $this-> idJoueur;
        }

        public function getJoueur1(){
            return $this-> idJoueur1;
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

        public function setIdJoueur($nouveauxJoueur){
            $this->nom = $nouveauxJoueur;
        }

        public function setIdJoueur1($nouveauxJoueur1){
            $this->nom = $nouveauxJoueur1;
        }

        // fonctions CRUD
        public function readAll(){
            $myQuery = 'SELECT * FROM matchs';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->execute();
            return $stmt;
        }

        public function readAllJoueur(){
            $myQuery = 'SELECT * FROM matchs JOIN joueur ON matchs.idMatchs = joueur.idJoueur';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->execute();
            return $stmt;
        }

        public function readSingle(){
            $myQuery = 'SELECT * FROM matchs WHERE idMatchs=:idMatchs';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':idMatchs', $this->idMatchs);
            $stmt->execute();
            return $stmt;
        }

        public function createOne(){
            $myQuery = 'INSERT INTO matchs 
                        SET 
                        dateMatchs = :dateMatchs,
                        lieuMatchs = :lieuMatchs,
                        idJoueur = :idJoueur,
                        idJoueur1 = :idJoueur1';
    
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':dateMatchs', $this->dateMatchs);
            $stmt->bindParam(':lieuMatchs', $this->lieuMatchs);
            $stmt->bindParam(':idJoueur', $this->idJoueur);
            $stmt->bindParam(':idJoueur1', $this->idJoueur1);
            return $stmt->execute();
        }
    
        public function updateOne(){
            $myQuery = 'UPDATE matchs
                        SET 
                            dateMatchs = :dateMatchs,
                            lieuMatchs = :lieuMatchs,
                            idJoueur =:idJoueur,
                            idjoueur1 = :idJoueur1
                        WHERE 
                            idMatchs = :idMatchs';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':idMatchs', $this->idMatchs);
            $stmt->bindParam(':dateMatchs', $this->dateMatchs);
            $stmt->bindParam(':lieuMatchs', $this->lieuMatchs);
            $stmt->bindParam(':idJoueur', $this->idJoueur);
            $stmt->bindParam(':idJoueur1', $this->idJoueur1);
            return $stmt->execute();
        }
    
        public function deleteOne(){
            $myQuery = 'DELETE FROM matchs
                WHERE 
                    idMatchs = :idMatchs';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':idMatchs', $this->idMatchs);
            return $stmt->execute();
        }
    }       
?>