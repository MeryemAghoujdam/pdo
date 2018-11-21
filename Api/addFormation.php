<?php

chdir('..');
include_once 'service/FormationService.php';
extract($_GET);

$ff = new FormationService();
$ff->create(new Formation($Id, $Nom, $DateDep, $DateFin, $Locatin));

echo 'True';

