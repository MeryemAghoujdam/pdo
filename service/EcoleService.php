<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EcoleService
 *
 * @author soufian
 */
include_once 'beans/Ecole.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';
class EcoleService implements IDao{
    
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }
    
    
    public function create($o) {
        
        $query = "Insert into Ecole values(NULL,?,?,?,?,?)";
        $req= $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getSerie(),$o->getMarque(),$o->getPrix(),$o->getPuissance(),$o->getType())) or die("Insert failed");
    }

    public function delete($o) {
        
        $query = "DELETE FROM Ecole WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("Delete failed ");
    }

    public function findAll() {
        
        $query = "select * from Ecole";
        $req = $this->connexion->getConnexion()->query($query);
        
        $Es= $req->fetchAll(PDO::FETCH_OBJ);
        $ecole = array();
        foreach ($Es as $e){
             $ecole [] = new Ecole($e->$id, $e->$nom, $e->$capacite, $e->$adresse, $e->$nombreDeSalle, $e->$numTel);
        }
        return $ecole;
    }

    public function findById($id) {
        $query = "select * from Ecole where id=?";
        $req = $this->connexion->getConnexion()->query($query);
        $e= $req->fetchAll(PDO::FETCH_OBJ);
        $ecole = new Ecole($e->$id, $e->$nom, $e->$capacite, $e->$adresse, $e->$nombreDeSalle, $e->$numTel);
        return $ecole;
        
    }

    public function update($o) {
        
        $query = "update Ecole set nom=?,capacite=?,adresse=?,nombreDeSalle=?,numTel=? where id=?";
        $req= $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getCapacite(),$o->getAdresse(),$o->getNombreDeSalle(),$o->getNumTel(),$o->getId())) or die("ERROR, update");
    }

}
