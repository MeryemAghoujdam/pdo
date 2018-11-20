<?php

class UsineConnexion {
    private $connexion;

    public function __construct() {
        $host = 'localhost';
        $dbname = 'php1';
        $login = 'root';
        $password = '';
        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
            $this->connexion->query("SET NAMES UTF8");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    function getConnexion() {
        return $this->connexion;
    }
    //put your code here
}
