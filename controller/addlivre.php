<?php
chdir('..');
include_once 'service/Livre.php';
extract($_GET);


$li = new MService();
if($op == 'add'){
    $li->create(new Marque(0, $titre));
}else {
    $l = $li->findById($id);
    $l->settitre($titre);
    $li->update($l);
}
header("Location:../Livre.php");

