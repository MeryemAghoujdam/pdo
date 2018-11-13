<?php
chdir('..');
include_once 'service/MarqueService.php';
extract($_GET);


$ms = new MarqueService();
if($op == 'add'){
    $ms->create(new Marque(0, $nom));
}else {
    $m = $ms->findById($id);
    $m->setNom($nom);
    $ms->update($m);
}
header("Location:../marque.php");
