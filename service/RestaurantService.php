<?php

 include_once 'dao/IDao.php';
 include_once 'beans/Restaurant.php';
 include_once 'connexion/Connexion.php';
 
class RestaurantService implements IDao{
    
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
        $query="CREATE TABLE if NOT EXISTS Restaurant( `id` int(11) PRIMARY key AUTO_INCREMENT NOT NULL,`nom` varchar(30) NOT NULL,`nbrtable` int(11) NOT NULL,`adresse` varchar(30) NOT NULL,`tele` varchar(30) NOT NULL,`nbretoile` int(11) NOT NULL)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die("Connexion Erreur");
    }

  public function create($o) {
        $query = "INSERT INTO Restaurant(nom,nbrtable,adresse,tele,nbretoile) VALUES (?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getNbrTable(),$o->getAdresse(),$o->getTele(),$o->getNbrEtoile())) or die('Error create');
    
    }
    
  public function delete($o) {
        $query = "DELETE FROM Restaurant WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }   
    

    
    public function findAll() {
        $query = "select * from Restaurant";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($s)!=0)
        {
            foreach ($s as $v){
             $restaurant [] = new Restaurant($v->id,$v->nom,$v->nbrtable,$v->adresse,$v->tele,$v->nbretoile);
            }
            return $restaurant;
        }
        else
            return 0;
    }
    
      public function findById($id) {
        $query = "select * from Restaurant where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $restaurant = new Restaurant($v->id,$v->nom,$v->nbrtable,$v->adresse,$v->tele,$v->nbretoile);
        return $restaurant;
    }
    
    public function findAllApi() {
        $query = "select * from Restaurant";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }
    
    public function update($o) {
        $query = "UPDATE `restaurant` SET `nom`=?,`nbrtable`=?,`adresse`=?,`tele`=?,`nbretoile`=? WHERE `id`=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getNbrTable(),$o->getAdresse(),$o->getTele(),$o->getNbrEtoile(),$o->getId())) or die('Error');
    } 
      
} 