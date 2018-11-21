<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employe
 *
 * @author asus
 */
include_once 'Profil.php';
class Employe {
    private $id;
    private $nom;
    private $prenom;
    private $tele;
    private $salaire;
    private $Login;
    private $password;
    private $profile;
          
    function __construct($id, $nom, $prenom, $tele, $salaire, $Login, $password, $profile) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tele = $tele;
        $this->salaire = $salaire;
        $this->Login = $Login;
        $this->password = $password;
        $this->profile = $profile;
    }

    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

     

    function getTele() {
        return $this->tele;
    }

    function getSalaire() {
        return $this->salaire;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

     

    function setTele($tele) {
        $this->tele = $tele;
    }

    function setSalaire($salaire) {
        $this->salaire = $salaire;
    }
    function getLogin() {
        return $this->Login;
    }

    function getPassword() {
        return $this->password;
    }

    function getProfile() {
        return $this->profile;
    }

    function setLogin($Login) {
        $this->Login = $Login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setProfile($profile) {
        $this->profile = $profile;
    }


}
