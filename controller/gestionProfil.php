<?php

chdir('..');
include_once 'service/ProfilService.php';
extract($_GET);

$ps = new ProfilService();

if($op == 'add'){
    
    $ps->create(new Profil($id, $code, $libelle));
}
elseif ($op == 'update') {
    $p = new Profil($id, $code, $libelle);
    $ps->update($p);
    }
else {
    $ps->delete($ps->findById($id));
}

header("Location:../profil.php");
