<?php


class restaurant {
    
  private $id;
    private $nom;
    private $nbrtable;
    private $adresse;
    private $tele;
    private $nbretoile;
    
    function getNom() {
        return $this->nom;
    }

    function getNbrTable() {
        return $this->nbrtable;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getTele() {
        return $this->tele;
    }

    function getNbrEtoile() {
        return $this->nbretoile;
    }
    
    function getId() {
        return $this->id;
    }

        function setNom($nom) {
        $this->nom = $nom;
    }

    function setNbrTable($nbrtable) {
        $this->nbrtable = $nbrtable;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setTele($tele) {
        $this->tele = $tele;
    }

    function setNbrEtoile($nbretoile) {
        $this->nbretoile= $nbretoile;
    }

    function __construct($id, $nom, $nbrtable, $adresse, $tele, $nbretoile) {
        $this->id = $id;
        $this->nom = $nom;
        $this->nbrtable = $nbrtable;
        $this->adresse = $adresse;
        $this->tele = $tele;
        $this->nbretoile = $nbretoile;
    }  
    
    
}
