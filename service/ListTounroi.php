<?php

include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';
include_once 'beans/Tournoi.php';
class ListTounroi implements IDao{
    private $trnConnexion;
    function __construct() {
        $this->trnConnexion=new Connexion();
    }

    public function create($o) {
        $query='insert into tournoi(typetournoi,nomjoueur,prenomjoueur,datetournoi,score) values (?,?,?,?,?)';
        $req= $this->trnConnexion->getConnexion()->prepare($query);
        $req->execute(array($o->getTypetournoi(),$o->getNomjoueur(),$o->getPrenomjoueur(),$o->getDatetournoi(),$o->getScore())) or die("erour ajoute de tournoi");
        
    }
    
     public function findAllApi() {
        $query = "select * from tournoi";
        $req = $this->trnConnexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        return $s;
    }
    public function delete($o) {
        $query='delete from tournoi where id=?';
        $req=$this->trnConnexion->getConnexion()->prepare($query);
        $req->execute(array($o)) or die("erour delete");
    }

    public function findAll() {
        $query='select * from tournoi';
        $req= $this->trnConnexion->getConnexion()->query($query);
        $list= $req->fetchAll(PDO::FETCH_OBJ);
         if(count($list)!=0)
        {
            foreach ($list as $t){
             $tournois [] = new Tournoi($t->id,$t->typetournoi,$t->nomjoueur,$t->prenomjoueur,$t->datetournoi,$t->score);
            }
            return $tournois;
        }
        else
            return 0;
    }

    public function findById($id) {
        $query = "select * from tournoi where id =?";
        $req = $this->trnConnexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $tournois = new Tournoi($id, $typetournoi, $nomjoueur, $prenomjoueur, $datetournoi, $score);
        return $tournois;
        
    }

    public function update($o) {
        $query = "UPDATE tournoi SET typetournoi=?,nomjoueur=?,prenomjoueur=?,datetournoi=?,score=? WHERE id=?";
        $req = $this->trnConnexion->getConnexion()->prepare($query);
        $req->execute(array($o->getTypetournoi(),$o->getNomjoueur(),$o->getPrenomjoueur(),$o->getDatetournoi(),$o->getScore(),$o->getId())) or die('Error update');
    }

}
