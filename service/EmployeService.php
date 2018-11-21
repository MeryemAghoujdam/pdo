<?php
 include_once '../dao/IDao.php';
 include_once '../beans/Employe.php';
 include_once '../connexion/Connexion.php';
 
class EmployeService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }
    
    public function create($o) {
        $query = "INSERT INTO employe VALUES (NULL,?,?,?,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getPrenom(),$o->getTele(),$o->getSalaire(),$o->getLogin(),$o->getPassword(),$o->getProfile()->getId())) or die('Error');
    }

    public function delete($o) {
        $query = "DELETE FROM employe WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select e.*,p.profilCode,p.libell from employe e inner join profil p on p.id=e.profilid";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        $employes = array();
        foreach ($s as $v){
            $employe [] = new Employe($v->id,$v->nom,$v->prenom,$v->tele,$v->salaire,$v->login,$v->pass,new Profil($v->profilId,$v->profileCode,$v->libell));
        }
        return $employe;
    }

    public function findById($id) {
        $query = "select e.*,p.profilCode,p.libell from employe e inner join profil p on p.id=e.profilid e.id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $employe = new Employe($v->id,$v->nom,$v->prenom,$v->tele,$v->salaire,$v->login,$v->pass,new Profil($v->profilId,$v->profileCode,$v->libell));
        return $employe;
    }
    public function findByLogin($login) {
        $query = "select e.*,p.profilCode,p.libell from employe e inner join profil p on p.id=e.profilid where e.login =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($login));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        if (isset($v->id)) {
            return $employe = new Employe($v->id,$v->nom,$v->prenom,$v->tele,$v->salaire,$v->login,$v->pass,new Profil($v->profilid,$v->profilCode,$v->libell));
        }else{
            return new Employe("", "", "", "", "", "", "", null);
        }
    }

    public function update($o) {
         $query = "UPDATE `employe` SET `nom`=?,`prenom`=?,`tele`=?,`salaire`=? WHERE `id`=?";
         $req = $this->connexion->getConnexion()->prepare($query);
         $req->execute(array($o->getCin(),$o->getNom(),$o->getPrenom(),$o->getTele(),$o->getTele(),$o->getId())) or die('Error');
    
    }

}
