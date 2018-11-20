<?php

chdir('..');
include_once 'service/EcoleService.php';

header('Content-type: application/json');

$ss = new EcoleService();
echo json_encode($ss->findAllApi());