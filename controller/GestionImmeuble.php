<?php

chdir('..');
include_once 'service/ImmeubleService.php';
extract($_GET);


$I = new ImmeubleService();
if($op == 'add'){
    $I->create(new Immeuble($id,$adresse,$nbrappartement,$nomPropriétaire,$entrepriseConstruction,$dateConstruction));
}

elseif ($op == 'update') {
    $_I = new Immeuble($id,$adresse,$nbrappartement,$nomPropriétaire,$entrepriseConstruction,$dateConstruction);
    $I->update($_I);
    }
    
    
else {
    $I->delete($I->findById($id));
}

header("Location:../Immeuble.php");