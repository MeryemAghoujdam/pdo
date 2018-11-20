<?php


class Hotel {
    private $id;
    private $client;
    private $numChambre;
    private $nbrJours;
    private $prix;
    function __construct($id, $client, $numChambre, $nbrJours, $prix) {
        $this->id = $id;
        $this->client = $client;
        $this->numChambre = $numChambre;
        $this->nbrJours = $nbrJours;
        $this->prix = $prix;
    }
    function getId() {
        return $this->id;
    }

    function getClient() {
        return $this->client;
    }

    function getNumChambre() {
        return $this->numChambre;
    }

    function getNbrJours() {
        return $this->nbrJours;
    }

    function getPrix() {
        return $this->prix;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setClient($client) {
        $this->client = $client;
    }

    function setNumChambre($numChambre) {
        $this->numChambre = $numChambre;
    }

    function setNbrJours($nbrJours) {
        $this->nbrJours = $nbrJours;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

       


}
