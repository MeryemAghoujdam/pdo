<?php
 include_once 'dao/IDao.php';
 include_once 'beans/Usine.php';
 include_once 'connexion/Connexion.php';
class UsineService implements IDao {
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
       
    }
    public function create($u) {
        $query = "INSERT INTO usine VALUES (NULL,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($u->getId(),$u->getNom(),$u->getAdresse(),$u->getCategorie(),$u->getNombreOfEmployer(), $u->getCapacite(), $u->getEspace())) or die('Error');
    }

    public function delete($u) {
         $query = "DELETE FROM usine WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($u->getId())) or die("erreur delete");
    }

    public function findAll() {
         $query = "select * from usine";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($s)!=0)
        {
            foreach ($s as $v){
             $usine [] = new Usine($v->Id,$v->Nom,$v->Adresse,$v->Categorie,$v->NombreOfEmployer,$v->Capacite,$v->Espace);
            }
            return $usine;
        }
        else
            return 0;
    }

    public function findById($id) {
         $query = "select * from usine where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $usine = new Usine($v->Id,$v->Nom,$v->Adresse,$v->Categorie,$v->NombreOfEmployer,$v->Capacite,$v->Espace);
        return $usine;
    }

    public function update($u) {
         $query = "UPDATE `usine` SET `nom`=?,`adresse`=?,`categorie`=?,`nombreOfEmployer`=?,`capacite`=?,`espace`=?    WHERE `id`=?";
        $req = $this->connexion->getConnexion()->prepare($query);
         $req->execute(array($u->getNom(),$u->getAdresse(),$u->getCategorie(),$u->getNombreOfEmployer(), $u->getCapacite(), $u->getEspace(),$u->getId())) or die('Error');
    
    }

}

