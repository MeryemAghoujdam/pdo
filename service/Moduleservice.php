<?php

include_once 'dao/IDao.php';
    include_once 'beans/Module.php';
    include_once 'connexion/Connexion.php';
    
class Moduleservice implements IDao {
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }
    
    public function create($o) {
        $query = "INSERT INTO Module VALUES (NULL,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getNote(),$o->getCoefficient(),$o->getPeriode())) or die('Error');
    
    }

    public function delete($o) {
        $query = "DELETE FROM Module WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from Module";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($s)!=0)
        {
            foreach ($s as $v){
             $modules [] = new Module($v->id,$v->nom,$v->note,$v->coefficient,$v->periode);
            }
            return $modules;
        }
        else
            return 0;
    }

    public function findById($id) {
        $query = "select * from Module where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $module = new Module($v->id,$v->nom,$v->note,$v->coefficient,$v->periode);
        return $module;
    }

    public function update($o) {
        $query = "UPDATE `module` SET `nom`=?,`note`=?,`coefficient`=?,`periode`=? WHERE `id`=?";
        $req = $this->connexion->getConnexion()->prepare($query);
         $req->execute(array($o->getNom(),$o->getNote(),$o->getCoefficient(),$o->getPeriode(),$o->getId())) or die('Error');
    }

}
