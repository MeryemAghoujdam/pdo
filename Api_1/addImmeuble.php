<?php

chdir('..');
include_once 'service/ImmeubleService.php';
extract($_GET);

$im = new ImmeubleService();

$im->create(new Immeuble($id, $adresse, $nbrappartement, $nomPropriétaire, $entrepriseConstruction, $dateConstruction));

echo 'True';

