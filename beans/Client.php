<?php
 
class Client {
    //put your code here
    private $id;
    private $cin;
    private $nom;
    private $prenom;
    private $tele;
    private $ville;
   
    
    function getId() {
        return $this->id;
    }

    function getCin() {
        return $this->cin;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getTele() {
        return $this->tele;
    }

    function getVille() {
        return $this->ville;
    }

    

    function setCin($cin) {
        $this->cin = $cin;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setTele($tele) {
        $this->tele = $tele;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }
 

    function __construct($id, $cin, $nom, $prenom, $tele, $ville ) {
        $this->id = $id;
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tele = $tele;
        $this->ville = $ville;
      
    }

}
