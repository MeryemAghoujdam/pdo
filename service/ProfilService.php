<?php

    include_once 'dao/IDao.php';
    include_once 'beans/Profil.php';
    include_once 'connexion/Connexion.php';

class ProfilService implements IDao{
    
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
        $query="CREATE TABLE if NOT EXISTS profil (id int PRIMARY key AUTO_INCREMENT,code varchar(15) not null,libelle varchar(15) not null)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die("Connexion Erreur");
    }
    
    public function create($o) {
        $query = "INSERT INTO Profil VALUES (NULL,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getCode(),$o->getLibelle())) or die('Create Error');
    
    }

    public function delete($o) {
        $query = "DELETE FROM Profil WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("Delete Erreur");
    }

    public function findAll() {
        $query = "select * from Profil";
        $req = $this->connexion->getConnexion()->query($query);
        $p= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($p)!=0)
        {
            foreach ($p as $v){
             $profils [] = new Profil($v->id,$v->code,$v->libelle);
            }
            return $profils;
        }
        else
            return 0;
    }

    public function findById($id) {
        $query = "select * from Profil where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $profils = new Profil($v->id,$v->code,$v->libelle);
        return $profils;
    }

    public function update($o) {
        $query = "UPDATE `Profil` SET `code`=?,`libelle`=? WHERE `id`=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getCode(),$o->getLibelle(),$o->getId())) or die('Update Error');
    }

}
