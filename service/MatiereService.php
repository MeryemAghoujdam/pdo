<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MatiereService
 *
 * @author watashiwa L desu
 */
//chdir("../");
include_once 'beans/Matiere.php';
include_once 'dao/IDao.php';
include_once 'connexion/MatiereConnexion.php';

class MatiereService implements IDao {
    //put your code here
    private $cnx;
    function __construct() {
        $this->cnx = new MatiereConnexion();
    }

    public function create($o) {
        $query = "Insert Into Matiere (nom,coef,NombreHeures,abreviation) Values(?,?,?,?)";
        $r = $this->cnx->getConnexion()->prepare($query);
        $r->execute(array($o->getNom(),$o->getCoef(),$o->getNombreHeures(),$o->getAbreviation())) or die("error");
        
    }

    public function delete($o) {
        $query = "Delete From matiere Where id=?";
        $r = $this->cnx->getConnexion()->prepare($query);
        $r->execute(array($o->getId()));
    }

    public function findAll() {
        $query = "Select * From matiere";
        $r = $this->cnx->getConnexion()->query($query);
        $ListeMat= $r->fetchAll(PDO::FETCH_OBJ);
        if(count($ListeMat) != 0)
        {
            foreach ($ListeMat as $item){
                
             $liste [] = new matiere($item->id,$item->nom,$item->coef,$item->NombreHeures,$item->abreviation);
            }
            return $liste;
        }
        else
            return 0;
    }

    public function findById($id) {
        $query = 'Select * From matiere Where id=?';
        $r = $this->cnx->getConnexion()->prepare($query);
        $r->execute(array($id));
        $result = $r->fetch(PDO::FETCH_OBJ);
        $matiere = new Matiere($result->id,$result->nom,$result->coef,$result->NombreHeures,$result->abreviation);
        return $matiere;
        
    }

    public function update($o) {
        $query = 'UPDATE matiere SET nom=?,coef=?,NombreHeures=?,abreviation=? WHERE id=?';
        $r = $this->cnx->getConnexion()->prepare($query);
        $r->execute(array($o->getNom(),$o->getCoef(),$o->getNombreHeures(),$o->getAbreviation(),$o->getId())) or die("error");
        
    }

}
