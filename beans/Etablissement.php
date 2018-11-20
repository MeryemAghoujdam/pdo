<?php


class Etablissement {
    
    private $id;
    private $nom;
    private $adresse;
    private $type;
    private $capacite;
    
    
    
    
    
    function __construct($id, $nom, $adresse, $type, $capacite) {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->type = $type;
        $this->capacite = $capacite;
          }
          
          function getId() {
              return $this->id;
          }

          function getNom() {
              return $this->nom;
          }

          function getAdresse() {
              return $this->adresse;
          }

          function getType() {
              return $this->type;
          }

          function getCapacite() {
              return $this->capacite;
          }

                 function setNom($nom) {
              $this->nom = $nom;
          }

          function setAdresse($adresse) {
              $this->adresse = $adresse;
          }

          function setType($type) {
              $this->type = $type;
          }

          function setCapacite($capacite) {
              $this->capacite = $capacite;
          }

}
