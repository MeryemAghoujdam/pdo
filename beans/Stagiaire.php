<?php

class Stagiaire {
    private $id;
    private $nom;
    private $prenom;
    private $daten;
    private $tele;
    private $email;
    
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDaten() {
        return $this->daten;
    }

    function getTele() {
        return $this->tele;
    }

    function getEmail() {
        return $this->email;
    }
    
    function getId() {
        return $this->id;
    }

        function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDaten($daten) {
        $this->daten = $daten;
    }

    function setTele($tele) {
        $this->tele = $tele;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function __construct($id, $nom, $prenom, $daten, $tele, $email) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->daten = $daten;
        $this->tele = $tele;
        $this->email = $email;
    }
    
    
    }
