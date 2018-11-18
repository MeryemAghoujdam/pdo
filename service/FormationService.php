<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'beans/Formation.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';
class FormationService implements IDao {
    
    private $connexion;
        function __construct() {
        $this->connexion = new Connexion();
        $query="CREATE TABLE if NOT EXISTS Formation (Id int PRIMARY key AUTO_INCREMENT,Nom varchar(30),DateDep date,DateFin date, Location varchar(20))";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die("La table n'est pas créés");
    }
    
    public function create($o) {
        $query = "Insert into Formation values(NULL,?,?,?,?)";
        $req= $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getDateDep(),$o->getDateFin(),$o->getLocation())) or die("ERROR, insert");
    }

    public function delete($o) {
        $query = "DELETE FROM Formation WHERE Id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from Formation";
        $req = $this->connexion->getConnexion()->query($query);
        $Fs= $req->fetchAll(PDO::FETCH_OBJ);
        $formations = array();
        foreach ($Fs as $f){
             $formations [] = new Formation($f->Id,$f->Nom,$f->DateDep,$f->DateFin,$f->Location);
        }
        return $formations;
        
    }

    public function findById($id) {
        $query = "select * from Formation where Id=?";
        $req = $this->connexion->getConnexion()->query($query);
        $req->execute(array($id));
        $f= $req->fetch(PDO::FETCH_OBJ);
        $formation = new Formation($f->Id,$f->Nom,$f->DateDep,$f->DateFin,$f->Location);
        return $formation;
    }

    public function update($o) {
        $query = "update Formation set Nom=?,DateDep=?,DateFin=?,Location=? where Id=?";
        $req= $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getDateDep(),$o->getDateFin(),$o->getLocation(),$o->getId())) or die("ERROR, update");
    }
}    