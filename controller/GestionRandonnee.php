<?php

chdir('..');
include_once 'service/RandonneeService.php';
extract($_GET);

$Rs = new RandonneeService();

if($op == 'add'){
    
    $Rs->create(new Randonnee($id, $direction, $dateDepart, $dateRetour, $prix, $nombre_participants));
    
}
else if ($op == 'update') {
    
    $Rd = new Randonnee($id, $direction, $dateDepart, $dateRetour, $prix, $nombre_participants);
    $Rs->update($Rd);
    
  
}
    
else {
    $Rs->delete($Rs->findById($id));
}

header("Location:../Randonnee.php");
