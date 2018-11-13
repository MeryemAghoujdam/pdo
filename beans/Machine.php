<?php

include 'Marque.php';
class Machine {
    private $id;
    private $reference;
    private $prix;
    private $dateAchat;
    private $marque;
    
    function __construct($id, $reference, $prix, $dateAchat, $marque) {
        $this->id = $id;
        $this->reference = $reference;
        $this->prix = $prix;
        $this->dateAchat = $dateAchat;
        $this->marque = $marque;
    }
    
    
    function getId() {
        return $this->id;
    }

    function getReference() {
        return $this->reference;
    }

    function getPrix() {
        return $this->prix;
    }

    function getDateAchat() {
        return $this->dateAchat;
    }

    function getMarque() {
        return $this->marque;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setReference($reference) {
        $this->reference = $reference;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setDateAchat($dateAchat) {
        $this->dateAchat = $dateAchat;
    }

    function setMarque($marque) {
        $this->marque = $marque;
    }


    public function __toString() {
        return $this->reference;
    }


            
}
