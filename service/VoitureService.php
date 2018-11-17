<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VoitureService
 *
 * @author IE
 */
include_once 'beans/Voiture.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';
class VoitureService implements IDao {
    
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
        $query="CREATE TABLE if NOT EXISTS voiture (id int PRIMARY key AUTO_INCREMENT,serie varchar(30),marque varchar(30),prix float, puissance int, type varchar(20))";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die("La table n'est pas créés");
    }
    
    public function create($o) {
        $query = "Insert into voiture values(NULL,?,?,?,?,?)";
        $req= $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getSerie(),$o->getMarque(),$o->getPrix(),$o->getPuissance(),$o->getType())) or die("ERROR, insert");
    }

    public function delete($o) {
        $query = "DELETE FROM voiture WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from voiture";
        $req = $this->connexion->getConnexion()->query($query);
        $Vs= $req->fetchAll(PDO::FETCH_OBJ);
        $voitures = array();
        foreach ($Vs as $v){
             $voitures [] = new Voiture($v->id,$v->serie,$v->marque,$v->prix,$v->puissance,$v->type);
        }
        return $voitures;
        
    }

    public function findById($id) {
        $query = "select * from voiture where id=?";
        $req = $this->connexion->getConnexion()->query($query);
        $v= $req->fetchAll(PDO::FETCH_OBJ);
        $voiture = new Voiture($v->id,$v->serie,$v->marque,$v->prix,$v->puissance,$v->type);
        return $voiture;
    }

    public function update($o) {
        $query = "update voiture set serie=?,marque=?,prix=?,puissance=?,type=? where id=?";
        $req= $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getSerie(),$o->getMarque(),$o->getPrix(),$o->getPuissance(),$o->getType(),$o->getId())) or die("ERROR, update");
    }

}
