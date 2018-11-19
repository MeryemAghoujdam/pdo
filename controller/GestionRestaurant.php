<?php

chdir('..');
include_once 'service/RestaurantService.php';
extract($_GET);

$s = new RestaurantService();

if($op == 'add'){
   
    $s->create(new restaurant($id,$nom,$nbrtable,$adresse,$tele,$nbretoile));  
   
}
elseif ($op == 'update') {
    $_s = new restaurant($id, $nom, $nbrtable, $adresse, $tele, $nbretoile);
    $s->update($_s);
    }
else {
    $s->delete($s->findById($id));
}

header("Location:../restaurant.php");
