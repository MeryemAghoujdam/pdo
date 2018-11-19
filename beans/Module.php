<?php

class Module {
    private $id;
    private $nom;
    private $note;
    private $coefficient;
    private $periode;
    
    
    function getNom() {
        return $this->nom;
    }

    function getNote() {
        return $this->note;
    }

    function getCoefficient() {
        return $this->coefficient;
    }

    function getPeriode() {
        return $this->periode;
    }

    
    function getId() {
        return $this->id;
    }

        function setNom($nom) {
        $this->nom = $nom;
    }

    function setNote($note) {
        $this->note = $note;
    }

    function setCoefficient($coeff) {
        $this->coefficient = $coeff;
    }

    function setPeriode($periode) {
        $this->periode = $periode;
    }

    
    function __construct($id, $nom, $note, $coefficient, $periode) {
        $this->id = $id;
        $this->nom = $nom;
        $this->note = $note;
        $this->coefficient = $coefficient;
        $this->periode = $periode;
       
    }
    
    
    }