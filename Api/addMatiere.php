<?php

chdir('..');
include_once 'service/MatiereService.php';

extract($_GET);

$ms = new MatiereService();

$ms->create(new Matiere($id, $nom, $coef, $NombreHeures, $abreviation));

echo 'True';
