<?php

    include_once 'dao/IDao.php';
    include_once 'beans/Stagiaire.php';
    include_once 'connexion/Connexion.php';
    
class StagiaireService implements IDao {
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
        $query="CREATE TABLE if NOT EXISTS stagiaire (id int PRIMARY key AUTO_INCREMENT,nom varchar(30) NOT NULL,prenom varchar(30) NOT NULL,daten date NOT NULL,tele varchar(10) NOT NULL,email varchar(50) NOT NULL)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die("Connexion Erreur");
    }
    
    public function create($o) {
        $query = "INSERT INTO Stagiaire VALUES (NULL,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getPrenom(),$o->getDaten(),$o->getTele(),$o->getEmail())) or die('Error');
    
    }

    public function delete($o) {
        $query = "DELETE FROM Stagiaire WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from Stagiaire";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($s)!=0)
        {
            foreach ($s as $v){
             $stagiaires [] = new Stagiaire($v->id,$v->nom,$v->prenom,$v->daten,$v->tele,$v->email);
            }
            return $stagiaires;
        }
        else
            return 0;
    }
    
    public function findAllApi() {
        $query = "select * from Stagiaire";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }

    public function findById($id) {
        $query = "select * from Stagiaire where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $stagiaire = new Stagiaire($v->id,$v->nom,$v->prenom,$v->daten,$v->tele,$v->email);
        return $stagiaire;
    }

    public function update($o) {
        $query = "UPDATE `stagiaire` SET `nom`=?,`prenom`=?,`daten`=?,`tele`=?,`email`=? WHERE `id`=?";
        $req = $this->connexion->getConnexion()->prepare($query);
         $req->execute(array($o->getNom(),$o->getPrenom(),$o->getDaten(),$o->getTele(),$o->getEmail(),$o->getId())) or die('Error');
    }

}
