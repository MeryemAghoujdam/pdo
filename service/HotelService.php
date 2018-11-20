<?php

    include_once 'dao/IDao.php';
    include_once 'beans/Hotel.php';
    include_once 'connexion/Connexion.php';
class HotelService implements IDao {
    private $connexion;
    function __construct() {
        $this->connexion = new Connexion();
    }

    public function create($o) {
        $query = "INSERT INTO Hotel VALUES (NULL,?,?,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getclient(),$o->getNumChambre(),$o->getNbrJours(),$o->getPrix())) or die('Error');
    }

    public function delete($o) {
        $query = "DELETE FROM Hotel WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getId())) or die("erreur delete");
    }

    public function findAll() {
        $query = "select * from Hotel";
        $req = $this->connexion->getConnexion()->query($query);
        $s= $req->fetchAll(PDO::FETCH_OBJ);
        if(count($s)!=0)
        {
            foreach ($s as $v){
            $hotels [] = new Hotel($v->ID,$v->Client,$v->Num_Chambre,$v->Nbr_Jours,$v->Prix_Louer);
            }
            return $hotels;
        }
        else
            return 0;
    }

    public function findById($id) {
        $query = "select * from Hotel where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $v=$req->fetch(PDO::FETCH_OBJ);
        $hotels = new Hotel($v->ID,$v->Client,$v->Num_Chambre,$v->Nbr_Jours,$v->Prix_Louer);
        return $hotels;
    }

    public function update($o) {
        $query="UPDATE Hotel SET CLient=?,Num_Chambre=?,Nbr_Jours=?,Prix_Louer=? WHERE id=?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getClient(),$o->getNumChambre(),$o->getNbrJours(),$o->getPrix(),$o->getId())) or die('Error update');
    }

}
