<?php
chdir('..');
include_once 'service/HotelService.php';
extract($_GET);

$ss = new HotelService();

$ss->create(new Hotel($id, $client, $numChambre, $nbrJours, $prix));

echo 'True';

