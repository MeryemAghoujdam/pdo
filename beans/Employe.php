<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employe
 *
 * @author asus
 */
class Employe {
    //put your code here
    //put your code here
    private $id;
    private $cin;
    private $nom;
    private $prenom;
    private $tele;
    private $salaire;
    
   
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

    function getSalaire() {
        return $this->salaire;
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

    function setSalaire($salaire) {
        $this->salaire = $salaire;
    }

    function __construct($id, $cin, $nom, $prenom, $tele, $salaire) {
        $this->id = $id;
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tele = $tele;
        $this->salaire = $salaire;
    }


}
