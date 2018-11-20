<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ecole
 *
 * @author soufian
 */
class Ecole {
     private $id;
     private $nom;
     private $capacite;
     private $adresse;
     private $nombreDeSalle;
     private $numTel;
     
     function __construct($id, $nom, $capacite, $adresse, $nombreDeSalle, $numTel) {
         $this->id = $id;
         $this->nom = $nom;
         $this->capacite = $capacite;
         $this->adresse = $adresse;
         $this->nombreDeSalle = $nombreDeSalle;
         $this->numTel = $numTel;
     }
     function getId() {
         return $this->id;
     }

     function getNom() {
         return $this->nom;
     }

     function getCapacite() {
         return $this->capacite;
     }

     function getAdresse() {
         return $this->adresse;
     }

     function getNombreDeSalle() {
         return $this->nombreDeSalle;
     }

     function getNumTel() {
         return $this->numTel;
     }

     function setNom($nom) {
         $this->nom = $nom;
     }

     function setCapacite($capacite) {
         $this->capacite = $capacite;
     }

     function setAdresse($adresse) {
         $this->adresse = $adresse;
     }

     function setNombreDeSalle($nombreDeSalle) {
         $this->nombreDeSalle = $nombreDeSalle;
     }

     function setNumTel($numTel) {
         $this->numTel = $numTel;
     }



    
}
