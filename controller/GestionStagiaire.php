<?php

chdir('..');
include_once 'service/StagiaireService.php';
extract($_GET);

$s = new StagiaireService();

if($op == 'add'){
    
    $s->create(new Stagiaire($id, $nom, $prenom, $daten, $tele, $email));
}
elseif ($op == 'update') {
    $_s = new Stagiaire($id, $nom, $prenom, $daten, $tele, $email);
    $s->update($_s);
    }
else {
    $s->delete($s->findById($id));
}

header("Location:../stagiaire.php");
