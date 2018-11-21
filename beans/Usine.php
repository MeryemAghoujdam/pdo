<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usine
 *
 * @author Pc
 */
class Usine {
    
     private $Id;
    private $Nom;
    private $Adresse;
    private $Categorie;
    private $NombreOfEmployer;
    private $Capacite;
    private $Espace;
    
    
    //TODO : Constrecteur
    function __construct($Id, $Nom, $Adresse, $Categorie, $NombreOfEmployer, $Capacite, $Espace) {
        $this->Id = $Id;
        $this->Nom = $Nom;
        $this->Adresse = $Adresse;
        $this->Categorie = $Categorie;
        $this->NombreOfEmployer = $NombreOfEmployer;
        $this->Capacite = $Capacite;
        $this->Espace = $Espace;
    }

    
    //TODO : Getter 
    function getId() {
        return $this->Id;
    }

    function getNom() {
        return $this->Nom;
    }

    function getAdresse() {
        return $this->Adresse;
    }

    function getCategorie() {
        return $this->Categorie;
    }

    function getNombreOfEmployer() {
        return $this->NombreOfEmployer;
    }

    function getCapacite() {
        return $this->Capacite;
    }

    function getEspace() {
        return $this->Espace;
    }

        
    
    //TODO : Setter
    function setId($Id) {
        $this->Id = $Id;
    }

    function setNom($Nom) {
        $this->Nom = $Nom;
    }

    function setAdresse($Adresse) {
        $this->Adresse = $Adresse;
    }

    function setCategorie($Categorie) {
        $this->Categorie = $Categorie;
    }

    function setNombreOfEmployer($NombreOfEmployer) {
        $this->NombreOfEmployer = $NombreOfEmployer;
    }

    function setCapacite($Capacite) {
        $this->Capacite = $Capacite;
    }

    function setEspace($Espace) {
        $this->Espace = $Espace;
    }

}
