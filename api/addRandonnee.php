<?php
chdir('..');
include_once 'service/RandonneeService.php';
extract($_GET);

$rs = new RandonneeService();

$rs->create(new Randonnee(0, $direction, $dateDepart, $dateRetour, $prix, $nombre_participants));

echo 'True';