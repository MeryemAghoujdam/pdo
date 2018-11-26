<?php

chdir('..');
include_once 'service/EntrepriseService.php';

header('Content-type: application/json');

$ss = new EntrepriseService();
echo json_encode($ss->findAllApi());
