<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EntrepriseService
 *
 * @author ZALA
 */
 include_once 'dao/IDao.php';
 include_once 'beans/Entreprise.php';
 include_once 'connexion/Connexion.php';
class EntrepriseService {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
        $query="CREATE TABLE if NOT EXISTS Entreprise (id int PRIMARY key AUTO_INCREMENT,nom varchar(30) NOT NULL,adresse varchar(30) NOT NULL,nombreDeSalarie float NOT NULL,numTel varchar(10) NOT NULL)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die("Connexion Erreur");
    }
    public function create($o) {
        $query = "INSERT INTO Entreprise VALUES (NULL,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getAdresse(),$o->getNombreDeSalarie(),$o->getNumTel())) or die('Error');
    }

    public function delete($o) {
         $query = "DELETE FROM Entreprise WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
         $query = "select * from Entreprise";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($s)!=0)
        {
            foreach ($s as $v){
             $entreprise [] = new Entreprise($v->id,$v->nom,$v->adresse,$v->nombreDeSalarie,$v->numTel);
            }
            return $entreprise;
        }
        else
            return 0;
    }

    public function findById($id) {
         $query = "select * from Entreprise where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $entreprise = new Entreprise($v->id,$v->nom,$v->adresse,$v->nombreDeSalarie,$v->numTel);
        return $entreprise;
    }
    public function findAllApi() {
        $query = "select * from Entreprise";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }
    public function update($o) {
         $query = "UPDATE `Entreprise` SET `nom`=?,`adresse`=?,`nombreDeSalarie`=?,`numTel`=?  WHERE `id`=?";
        $req = $this->connexion->getConnexion()->prepare($query);
         $req->execute(array($o->getNom(),$o->getAdresse(),$o->getNombreDeSalarie(),$o->getNumTel(),$o->getId())) or die('Error');
    
    }
}
