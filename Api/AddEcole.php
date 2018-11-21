<?php
chdir('..');
include_once 'service/EcoleService.php';
extract($_GET);

$ec = new EcoleService();

$ec->create(new Ecole($id, $nom, $capacite, $adresse, $nombreDeSalle, $numTel));

echo 'True';
