<?php

chdir('..');
include_once 'service/EntrepriseService.php';
include_once 'beans/Entreprise.php';
extract($_GET);

$s = new EntrepriseService();

if($ops == 'insert'){
    
    $s->create(new Entreprise( 0,$nom, $adresse, $nombreDeSalarie, $numTel));
}
elseif ($ops == 'update') {
    $_s = new Entreprise($id, $nom, $adresse, $nombreDeSalarie, $numTel);
    $s->update($_s);
    }
else {
    $s->delete($s->findById($id));
}

header("Location:../Entreprise.php");

