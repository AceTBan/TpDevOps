<?php
class Users{
    // Attribut
    private $idUsers;
    private $nom;
    private $prenom;
    private $mdp; 
    private $loginUser;

        //attribue de stockage info de connexion bdd
        public $connect;

        //constructeur
        public function __construct(){
            $this->connect = new ConfigDb();
            $this->connect = $this->connect->getConnection();
        }

        // getter 
        public function getIdUsers(){
            return $this-> idUsers;
        }

        public function getNomUsers(){
            return $this-> nom;
        }

        public function getPrenomUsers(){
            return $this-> prenom;
        }

        public function getmdpUsers(){
            return $this-> mdp;
        }

        public function getLoginUsers(){
            return $this-> loginUser;
        }

        // setter
        public function setIdUsers($nouvelId){
            $this->idMatchs = intval($nouvelId, 10);
        }

        public function setNomUsers($nouveauNom){
            $this->nom = $nouveauNom;
        }

        public function setPrenomUsers($nouveauPrenom){
            $this->lieu = $nouveauPrenom;
        }

        public function setMdpUsers($nouveauMdp){
            $this->nom = $nouveauxMdp;
        }

        public function setLoginUsers($nouveauLogin){
            $this->nom = $nouveauLogin;
        }

        // fonctions CRUD
        public function readAll(){
            $myQuery = 'SELECT * FROM users';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->execute();
            return $stmt;
        }

        public function readSingle(){
            $myQuery = 'SELECT * FROM users WHERE idUsers=:idUsers';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':idUsers', $this->idUsers);
            $stmt->execute();
            return $stmt;
        }

        public function createOne(){
            $myQuery = 'INSERT INTO users 
                        SET 
                        nom = :nom,
                        prenom = :prenom,
                        mdp = :mdp,
                        loginUser = :loginUser';
    
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':nom', $this->nom);
            $stmt->bindParam(':prenom', $this->prenom);
            $stmt->bindParam(':mdp', $this->mdp);
            $stmt->bindParam(':loginUser', $this->loginUser);
            return $stmt->execute();
        }
    
        public function updateOne(){
            $myQuery = 'UPDATE users
                        SET 
                            nom = :nom,
                            prenom = :prenom,
                            mdp =:mdp,
                            loginUser = :loginUser
                        WHERE 
                            idUsers = :idUsers';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':idUsers', $this->idUsers);
            $stmt->bindParam(':nom', $this->nom);
            $stmt->bindParam(':prenom', $this->prenom);
            $stmt->bindParam(':mdp', $this->mdp);
            $stmt->bindParam(':loginUser', $this->loginUser);
            return $stmt->execute();
        }
    
        public function deleteOne(){
            $myQuery = 'DELETE FROM matchs
                WHERE 
                    idUsers = :idUsers';
            $stmt = $this->connect->prepare($myQuery);
            $stmt->bindParam(':idUsers', $this->idUsers);
            return $stmt->execute();
        }
    }       
?>