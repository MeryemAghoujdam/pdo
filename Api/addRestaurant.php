<?php
chdir('..');
include_once 'service/RestaurantService.php';
extract($_GET);
$ms = new RestaurantService();
$ms->create(new Restaurant($id, $nom, $nbrtable, $adresse, $tele, $nbretoile));
echo 'True';


