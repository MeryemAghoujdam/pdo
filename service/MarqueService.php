<?php

include_once 'beans/Marque.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';
class MarqueService implements IDao {
    
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO Marque VALUES (NULL,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom())) or die('Error');
    
    }

    public function delete($o) {
        $query = "DELETE FROM Marque WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from Marque";
        $req = $this->connexion->getConnexion()->query($query);
        $m= $req->fetchAll(PDO::FETCH_OBJ);
        foreach ($m as $v){
             $marques [] = new Marque($v->id,$v->nom);
        }
        return $marques;
    }

    public function findById($id) {
        $query = "select * from Marque where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $marque = new Marque($res->id, $res->nom);
        return $marque;
    }

    public function update($o) {
        $query = "UPDATE Marque SET nom = ? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(), $o->getId())) or die('Error');       
    }

}
