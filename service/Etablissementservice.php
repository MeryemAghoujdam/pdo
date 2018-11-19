<?php


include_once 'beans/Etablissement.php';
include_once 'connexion/Conx.php';
include_once 'dao/IDao.php';
class Etablissementservice  Implements IDao {
    
    private $connexion;
    
    
    
    function __construct() {
        $this->connexion = new Connexion();
    }
    
    public function create($o) {
        
        $query = "INSERT INTO etablissment VALUES (NULL,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getAdresse(),$o->getType(),$o->getCapacite())) or die('Error');
    
        
    }

    public function delete($o) {
        $query = "DELETE FROM etablissment WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }
        
        
        
        
    

    public function findAll() {
        
        $query = "select * from etablissment";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($s)!=0)
        {
            foreach ($s as $v){
             $etablissements [] = new Etablissement($v->id,$v->nom,$v->adresse,$v->type,$v->capacite);
            }
            return $etablissements;
        }
        else
            return 0;
        
    }

    public function findById($id) {
        $query = "select * from etablissment where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $Etablissement = new Etablissement($v->id,$v->nom,$v->adresse,$v->type,$v->capacite);
        return $Etablissement;
        
        
        
    }

    public function update($o) {
        $query = "UPDATE `etablissment` SET `nom`=?,`adresse`=?,`type`=?,`capacite`=? WHERE `id`=?";
        $req = $this->connexion->getConnexion()->prepare($query);
         $req->execute(array($o->getNom(),$o->getAdresse(),$o->getType(),$o->getCapacite(),$o->getId())) or die('Error');
    }
        
}


