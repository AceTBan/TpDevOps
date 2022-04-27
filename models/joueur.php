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
            $this->nom = $nouveauxNom;
        }

        public function setPrenomJoueur($nouveauxPrenom){
            $this->nom = $nouveauxPrenom;
        }

        public function setClassementJoueur($nouveauxClassement){
            $this->nom = $nouveauxClassement;
        }

        // fonctions CRUD
        public function readAll(){
            $myQuery = 'SELECT * FROM joueur';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->execute();
            return $stmt;
        }

        public function readSingle(){
            $myQuery = 'SELECT * FROM joueur WHERE nomJoueur=:nomJoueur';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nomJoueur', $this->nomJoueur);
            $stmt->execute();
            return $stmt;
        }

        public function createOne(){
            $myQuery = 'INSERT INTO joueur 
                        SET 
                            nomJoueur = :nomJoueur,
                            prenomJoueur = :prenomJoueur,
                            classementJoueur = :classementJoueur';
    
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nomJoueur', $this->nomJoueur);
            $stmt->bindParam(':prenomJoueur', $this->prenomJoueur);
            $stmt->bindParam(':classementJoueur', $this->classementJoueur);
            return $stmt->execute();
        }
    
        public function updateOne(){
            $myQuery = 'UPDATE joueur
                        SET 
                            nomJoueur = :nomJoueur,
                            prenomJoueur = :prenomJoueur,
                            classementJoueur =:classementJoueur,
                            id_joueur = :idJoueur
                        WHERE 
                            id_joueur = :idJoueur';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':idJoueur', $this->idJoueur);
            $stmt->bindParam(':nomJoueur', $this->nomJoueur);
            $stmt->bindParam(':prenomJoueur', $this->prenomJoueur);
            $stmt->bindParam(':classementJoueur', $this->classementJoueur);
            return $stmt->execute();
        }
    
        public function deleteOne(){
            $myQuery = 'DELETE FROM joueur
                WHERE 
                    id_joueur = :idJoueur';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':idJoueur', $this->idJoueur);
            return $stmt->execute();
        }
    }       
?>