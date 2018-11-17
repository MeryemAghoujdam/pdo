<?php
      
class Randonnee{
        private $id;
        private $direction;
        private $dateDepart;
        private $dateRetour;
        private $prix;
        private $nombre_participants;
    
    
    function __construct($id,$direction,$dateDepart,$dateRetour,$prix,$nombre_participants)
    {
        $this -> id = $id;
        $this -> direction = $direction;
        $this->dateDepart = $dateDepart;
        $this->dateRetour = $dateRetour;
        $this->prix=$prix;
        $this->nombre_participants=$nombre_participants;
    }
    
    function getId() {
        return $this->id;
    }

    function getDirection() {
        return $this->direction;
    }

    function getDateDepart() {
        return $this->dateDepart;
    }

    function getDateRetour() {
        return $this->dateRetour;
    }

    function getPrix() {
        return $this->prix;
    }

    function getNombre_participants() {
        return $this->nombre_participants;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDirection($direction) {
        $this->direction = $direction;
    }

    function setDateDepart($dateDepart) {
        $this->dateDepart = $dateDepart;
    }

    function setDateRetour($dateRetour) {
        $this->dateRetour = $dateRetour;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setNombre_participants($nombre_participants) {
        $this->nombre_participants = $nombre_participants;
    }

}