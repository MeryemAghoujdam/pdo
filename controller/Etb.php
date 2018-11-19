<?php

chdir('..');
include_once 'service/Etablissementservice.php';
extract($_GET);

$s = new Etablissementservice();

if($op == 'add'){
    
    $s->create(new Etablissement($id, $nom, $adresse, $type, $capacite));
}
elseif ($op == 'update') {
    $_s = new Etablissement($id, $nom, $adresse, $type, $capacite);
    $s->update($_s);
    }
else {
    $s->delete($s->findById($id));
}

header("Location:../ind.php");

