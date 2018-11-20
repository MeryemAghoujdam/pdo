<?php

chdir('..');
include_once 'service/MatiereService.php';

header('Content-type: application/json');

$ms = new MatiereService();

echo json_encode($ms->findAllApi());