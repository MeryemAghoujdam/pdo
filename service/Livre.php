
<?php

include_once 'beans/Livre.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';
class MarqueService implements IDao {
    
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO livre VALUES (NULL,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->gettitre())) or die('Error');
    
    }

    public function delete($o) {
        $query = "DELETE FROM livre WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from livre";
        $req = $this->connexion->getConnexion()->query($query);
        $l= $req->fetchAll(PDO::FETCH_OBJ);
        foreach ($l as $v){
             $livre [] = new livre($v->id,$v->titre);
        }
        return $livre;
    }

    public function findById($id) {
        $query = "select * from livre where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $livre = new Marque($res->id, $res->titre);
        return $livre;
    }

    public function update($o) {
        $query = "UPDATE livre SET nom = ? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->gettitre(), $o->getId())) or die('Error');       
    }

}


