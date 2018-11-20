<?php

 include_once 'dao/IDao.php';
 include_once 'beans/Employe.php';
 include_once 'connexion/Connexion.php';
 
class EmployeService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }
    
    public function create($o) {
        $query = "INSERT INTO employe VALUES (NULL,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getCin(),$o->getNom(),$o->getPrenom(),$o->getTele(),$o->getSalaire())) or die('Error');
    }

    public function delete($o) {
        $query = "DELETE FROM employe WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from employe";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($s)!=0)
        {
            foreach ($s as $v){
             $employe [] = new Employe($v->id,$v->cin,$v->nom,$v->prenom,$v->tele,$v->salaire);
            }
            return $employe;
        }
        else
            return 0;
    }

    public function findById($id) {
        $query = "select * from employe where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $employe = new Employe($v->id,$v->cin,$v->nom,$v->prenom,$v->tele,$v->salaire);
        return $employe;
    }

    public function update($o) {
         $query = "UPDATE `employe` SET `cin`=?,`nom`=?,`prenom`=?,`tele`=?,`salaire`=? WHERE `id`=?";
        $req = $this->connexion->getConnexion()->prepare($query);
         $req->execute(array($o->getCin(),$o->getNom(),$o->getPrenom(),$o->getTele(),$o->getTele(),$o->getId())) or die('Error');
    
    }

}
