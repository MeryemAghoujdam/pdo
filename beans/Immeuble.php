<?php


/**
 * Description of Immeuble
 *
 * @author Fatima
 */
class Immeuble {
    
    private $id;
    private $adresse;
    private $nbrappartement;
    private $nomPropriétaire ;
    private $entrepriseConstruction;
    private $dateConstruction;
    
    function getAdresse()
    {
        return $this->adresse;
    }

    function getNbrappartement() {
        return $this->nbrappartement;
    }
    function getNomPropriétaire(){
        return $this->nomPropriétaire ;
    }
    
    function getEntrepriseConstruction(){
        return $this->entrepriseConstruction;
    }
    
    function getDateConstruction(){
        return $this->dateConstruction;
    }
            
    function getId() {
        return $this->id;
    }

        function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setNbrappartement($nbrappartement) {
        $this->nbrappartement = $nbrappartement;
    }
    
    function setNomPropriétaire($nomPropriétaire){
        $this->nomPropriétaire= $nomPropriétaire;
    }
    
     function setEntrepriseConstruction($entrepriseConstruction){
        $this->entrepriseConstruction= $entrepriseConstruction;
    }
    function setDateConstruction($dateConstruction)
    {
        $this->dateConstruction=$dateConstruction ;
    }
    
    

    
    function __construct($id, $adresse, $nbrappartement,$nomPropriétaire,$entrepriseConstruction,$dateConstruction) {
        $this->id = $id;
        $this->adresse = $adresse;
        $this->nbrappartement = $nbrappartement;
        $this->nomPropriétaire=$nomPropriétaire;
        $this->entrepriseConstruction=$entrepriseConstruction;
        $this->dateConstruction=$dateConstruction;
      
    }
    
    
    }

    



