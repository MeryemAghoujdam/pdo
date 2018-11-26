<?php
chdir('..');
include_once 'service/EntrepriseService.php';
extract($_GET);

$ss = new EntrepriseService();

$ss->create(new Entreprise($id, $nom, $adresse, $nombreDeSalarie, $numTel));

echo 'True';
