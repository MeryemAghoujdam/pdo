<?php

include_once 'beans/Randonnee.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class RandonneeService implements IDao{
    
    private $connexion;
    
    
    function __construct() {
        $this->connexion = new connexion();
    }
    
    public function create($o) {
        $query="INSERT INTO `randonnee` VALUES(NULL,?,?,?,?,?)";
        $req= $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDirection(),$o->getDateDepart(),$o->getDateRetour(),$o->getPrix(),$o->getNombre_participants())) or die("ERROR");
    
    }

    public function delete($o) {
        $query="DELETE FROM `randonnee` WHERE id= ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die ("ERROR DELETE");
        
    }

    public function findAll() {
        
        $query = "select * from `randonnee`";
        $req = $this->connexion->getConnexion()->query($query);
        $R= $req->fetchAll(PDO::FETCH_OBJ);
        foreach ($R as $v){
             $randonnees [] = new Randonnee($v->id,$v->direction,$v->dateDepart,$v->dateRetour,$v->prix,$v->nombre_participants);
        }
        return $randonnees;
    }

    public function findById($id) {
        
        $query="SELECT * FROM `randonnee` WHERE id=?";
        $req= $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));
        $v=$req->fetch(PDO::FETCH_OBJ);
        $Randonnee=new Randonnee($v->id,$v->direction,$v->dateDepart,$v->dateRetour,$v->prix,$v->nombre_participants);
        return $Randonnee;
    }
    
    public function findAllApi() {
        $query = "select * from randonnee";
        $req = $this->connexion->getConnexion()->query($query);
        $R= $req->fetchAll(PDO::FETCH_OBJ);
        return $R;
    }

    public function update($o) {
        $query="UPDATE Randonnee SET direction=?,dateDepart=?,dateRetour=?,prix=?,nombre_participants=? WHERE id=?";
        $req= $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getDirection(),$o->getDateDepart(),$o->getDateRetour(),$o->getPrix(),$o->getNombre_participants(),$o->getId())) or die("ERROR");

      
    }


}
