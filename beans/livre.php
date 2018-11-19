<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of livre
 *
 * @author hp
 */
  
class livre {
    private $id;
    private $titre;
    private $prix;
    private $auteur;
    private $nbpage;
    
    function __construct($id, $titre, $prix, $auteur, $nbpage) {
        $this->id = $id;
        $this->titre = $titre;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->nbpage = $nbpage;
    }
    
    
    function getId() {
        return $this->id;
    }

    function gettitre() {
        return $this->titre;
    }

    function getPrix() {
        return $this->prix;
    }

    function getauteur() {
        return $this->auteur;
    }

    function getnbpage() {
        return $this->nbpage;
    }

    function setId($id) {
        $this->id = $id;
    }

    function settitre($titre) {
        $this->titre = $titre;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setauteur($auteur) {
        $this->auteur = $auteur;
    }

    function setnbpage($nbpage) {
        $this->nbpage = $nbpage;
    }


    public function __toString() {
        return $this->titre;
    }


            
}

