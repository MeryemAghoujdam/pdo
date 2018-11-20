<?php

    include_once 'dao/IDao.php';
    include_once 'beans/Immeuble.php';
    include_once 'connexion/Connexion.php';
    
class ImmeubleService implements IDao {
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }
    
    public function create($o) {
        $query = "INSERT INTO Immeuble VALUES (NULL,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getAdresse(),$o->getNbrappartement(),$o->getNomPropriétaire(),$o->getEntrepriseConstruction(),$o->getDateConstruction())) or die('Error');
    
    }


    public function delete($o) {
        $query = "DELETE FROM Immeuble WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from Immeuble";
        $req = $this->connexion->getConnexion()->query($query);
        $i= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($s)!=0)
        {
            foreach ($i as $v){
             $immeubles [] = new Immeuble($v->id,$v->adresse,$v->nbrappartement,$v->nomPropriétaire,$v->entrepriseConstruction,$v->dateConstruction);
            }
            return $immeubles;
        }
        else
            return 0;
    }

    public function findById($id) {
        $query = "select * from Immeuble  where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $immeuble = new Immeuble($v->id,$v->adresse,$v->nbrappartement,$v->nomPropriétaire,$v->entrepriseConstruction,$v->dateConstruction);
        return $immeuble;
    }

    public function update($o) {
        $query = "UPDATE `immeuble` SET `adresse`=?,`nbrappartement`=?,`nomPropriétaire`=?,`entrepriseConstruction`=?,`dateConstruction`=? WHERE `id`=?";
        $req = $this->connexion->getConnexion()->prepare($query);
         $req->execute(array($o->getAdresse(),$o->getNbrappartement(),$o->getNomPropriétaire(),$o->getEntrepriseConstruction(),$o->getDateConstruction(),$o->getId())) or die('Error');
    }

}
