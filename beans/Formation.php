<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Formation {
    private $Id ;
    private $Nom;
    private $DateDep;
    private $DateFin;
    private $Location;
     
    function __construct($Id,$Nom,$DateDep,$DateFin,$Locatin) {
        $this->Id=$Id;
        $this->Nom = $Nom;
        $this->DateDep = $DateDep;
        $this->DateFin = $DateFin;
        $this->Location = $Locatin;
    }
    
    function getNom(){
        return $this->Nom;
    }
    function getDateDep(){
        return $this->DateDep;
    }
    function getDateFin() {
        return $this->DateFin;
    }
    function getLocation(){
        return $this->Location;
    }
    function setNom($Nom) {
        $this->Nom = $Nom;
    }
    function setDateDep ($DateDep){
        $this->DateDep = $DateDep;
    }
    function setDateFin($DateFin){
        $this->DateFin = $DateFin;
    }
    function setLocation($Location){
        $this->Location = $Location;
    }
    function getId(){
        return $this->Id;
    }
}    