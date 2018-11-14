<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Voiture
 *
 * @author IE
 */
chdir("../");
include_once 'connexion/Connexion.php';
class Voiture {
    private $id;
    private $serie;
    private $marque;
    private $prix;
    private $chev;
    private $type;
    private static $accu=0;
    
    function __construct($serie, $marque, $prix, $chev, $type) {
        //Create table voiture if not exist
        $this->serie = $serie;
        $this->marque = $marque;
        $this->prix = $prix;
        $this->chev = $chev;
        $this->type = $type;
    }

    function getSerie() {
        return $this->serie;
    }

    function getMarque() {
        return $this->marque;
    }

    function getPrix() {
        return $this->prix;
    }

    function getChev() {
        return $this->chev;
    }

    function getType() {
        return $this->type;
    }

    function setSerie($serie) {
        $this->serie = $serie;
    }

    function setMarque($marque) {
        $this->marque = $marque;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setChev($chev) {
        $this->chev = $chev;
    }

    function setType($type) {
        $this->type = $type;
    }

    function getId() {
        return $this->id;
    }


}
