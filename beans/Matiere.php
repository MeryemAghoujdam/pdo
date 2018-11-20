<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Matiere
 *
 * @author watashiwa L desu
 */
class Matiere {
    //put your code here
    private $id ;
    private $nom;
    private $coef;
    private $NombreHeures;
    private $abreviation;
    
    function __construct($id, $nom, $coef, $NombreHeures, $Abreviation) {
        $this->id = $id;
        $this->nom = $nom;
        $this->coef = $coef;
        $this->NombreHeures = $NombreHeures;
        $this->abreviation = $Abreviation;
    }
            function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getCoef() {
        return $this->coef;
    }

    function getNombreHeures() {
        return $this->NombreHeures;
    }

    function getAbreviation() {
        return $this->abreviation;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setCoef($coef) {
        $this->coef = $coef;
    }

    function setNombreHeures($NombreHeures) {
        $this->NombreHeures = $NombreHeures;
    }

    function setAbreviation($Abreviation) {
        $this->abreviation = $Abreviation;
    }

    

    
}
