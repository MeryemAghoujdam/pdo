<?php

chdir('..');
include_once 'service/MarqueService.php';

extract($_GET);

$ms = new MarqueService();
$ms->create(new Marque(0,$nom));

header('Content-type: application/json');
$liste = $ms->findAllApi();
echo json_encode($liste);
