<?php

chdir('..');
include_once 'service/MarqueService.php';

header('Content-type: application/json');
$ms = new MarqueService();
$liste = $ms->findAllApi();
echo json_encode($liste);

