<?php


class Tournoi {
   private $id;
   private $typetournoi;
   private $nomjoueur;
   private $prenomjoueur;
   private $datetournoi;
   private $score;
   
   function __construct($id, $typetournoi, $nomjoueur, $prenomjoueur, $datetournoi, $score) {
       $this->id = $id;
       $this->typetournoi = $typetournoi;
       $this->nomjoueur = $nomjoueur;
       $this->prenomjoueur = $prenomjoueur;
       $this->datetournoi = $datetournoi;
       $this->score = $score;
   }
   
   function getId() {
       return $this->id;
   }

   function getTypetournoi() {
       return $this->typetournoi;
   }

   function getNomjoueur() {
       return $this->nomjoueur;
   }

   function getPrenomjoueur() {
       return $this->prenomjoueur;
   }

   function getDatetournoi() {
       return $this->datetournoi;
   }

   function getScore() {
       return $this->score;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setTypetournoi($typetournoi) {
       $this->typetournoi = $typetournoi;
   }

   function setNomjoueur($nomjoueur) {
       $this->nomjoueur = $nomjoueur;
   }

   function setPrenomjoueur($prenomjoueur) {
       $this->prenomjoueur = $prenomjoueur;
   }

   function setDatetournoi($datetournoi) {
       $this->datetournoi = $datetournoi;
   }

   function setScore($score) {
       $this->score = $score;
   }



}
