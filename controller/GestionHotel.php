<?php

chdir('..');
include_once 'service/HotelService.php';
extract($_GET);

$s = new HotelService();

if($op == 'add'){
    
    $s->create(new Hotel($id, $client, $numC, $nbrJ, $prix));
}
elseif ($op == 'update') {
    $_s = new Hotel($id, $client, $numC, $nbrJ, $prix);
    $s->update($_s);
    }
else {
    $s->delete($s->findById($id));
}

header("Location:../Hotel.php");

