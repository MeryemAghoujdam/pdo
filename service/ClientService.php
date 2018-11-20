<?php

 include_once 'dao/IDao.php';
 include_once 'beans/Client.php';
 include_once 'connexion/Connexion.php';
class ClientService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
       
    }
    public function create($o) {
        $query = "INSERT INTO client VALUES (NULL,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getCin(),$o->getNom(),$o->getPrenom(),$o->getTele(),$o->getVille())) or die('Error');
    }

    public function delete($o) {
         $query = "DELETE FROM client WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
         $query = "select * from client";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($s)!=0)
        {
            foreach ($s as $v){
             $client [] = new Client($v->id,$v->cin,$v->nom,$v->prenom,$v->tele,$v->ville);
            }
            return $client;
        }
        else
            return 0;
    }

    public function findById($id) {
         $query = "select * from client where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $client = new Client($v->id,$v->cin,$v->nom,$v->prenom,$v->tele,$v->ville);
        return $client;
    }

    public function update($o) {
         $query = "UPDATE `client` SET `cin`=?,`nom`=?,`prenom`=?,`tele`=?,`ville`=?  WHERE `id`=?";
        $req = $this->connexion->getConnexion()->prepare($query);
         $req->execute(array($o->getCin(),$o->getNom(),$o->getPrenom(),$o->getTele(),$o->getVille(),$o->getId())) or die('Error');
    
    }

}
