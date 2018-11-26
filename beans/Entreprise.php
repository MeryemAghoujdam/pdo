<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of entreprise
 *
 * @author ZALA
 */
class Entreprise {
     private $id;
     private $nom;
     private $adresse;
     private $nombreDeSalarie;
     private $numTel;
     
     function __construct($id, $nom, $adresse, $nombreDeSalarie, $numTel) {
         $this->id = $id;
         $this->nom = $nom;
         $this->adresse = $adresse;
         $this->nombreDeSalarie = $nombreDeSalarie;
         $this->numTel = $numTel;
     }
     function getId() {
         return $this->id;
     }

     function getNom() {
         return $this->nom;
     }

  

     function getAdresse() {
         return $this->adresse;
     }

     function getNombreDeSalarie() {
         return $this->nombreDeSalarie;
     }

     function getNumTel() {
         return $this->numTel;
     }

     function setNom($nom) {
         $this->nom = $nom;
     }
     function setAdresse($adresse) {
         $this->adresse = $adresse;
     }

     function setNombreDeSalarie($nombreDeSalarie) {
         $this->nombreDeSalarie = $nombreDeSalarie;
     }

     function setNumTel($numTel) {
         $this->numTel = $numTel;
     }
    //put your code here
}
