<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
chdir("../");
include_once 'service/EcoleService.php';
include_once 'beans/Ecole.php';

extract($_GET);

$es = new EcoleService();

if($ops == "add"){
    $e = new Ecole(0, $nom, $capacite, $adresse, $nombreDeSalle, $numTel);
    $es->create($e);
}
else if($ops=="update"){
    $e = new Ecole($id, $nom, $capacite, $adresse, $nombreDeSalle, $numTel);
    $es->update($e);
}
else{
    $s->delete($s->findById($id));
}
header("Location:../Ecole.php");