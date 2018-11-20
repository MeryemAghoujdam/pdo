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
class Voiture {
    private $id;
    private $serie;
    private $marque;
    private $prix;
    private $puissance;
    private $type;
    
    function __construct($id,$serie, $marque, $prix, $puissance, $type) {
        $this->id=$id;
        $this->serie = $serie;
        $this->marque = $marque;
        $this->prix = $prix;
        $this->puissance = $puissance;
        $this->type = $type;
    }

    function getId() {
        return $this->id;
    }

    function getMarque() {
        return $this->marque;
    }

    function getPrix() {
        return $this->prix;
    }
    function getSerie() {
        return $this->serie;
    }

    function getPuissance() {
        return $this->puissance;
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

    function setPuissance($puissance) {
        $this->puissance = $puissance;
    }

    function setType($type) {
        $this->type = $type;
    }


}
