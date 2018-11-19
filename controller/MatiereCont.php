<?php

chdir("../");
include_once 'service/MatiereService.php';
extract($_GET);

$matS = new MatiereService();

if($trait == 'ajouter'){
    $matS->create(new Matiere(0, $nom, $coef, $nombreHeures, $abreviation));
}
else if($trait == 'supprimer')
    $matS->delete (new Matiere($ID,$nom, $coef, $nombreHeures, $abreviation));
else{
    $matS->update(new Matiere($ID,$nom, $coef, $nombreHeures, $abreviation));
}


header("Location:../matiere.php");

