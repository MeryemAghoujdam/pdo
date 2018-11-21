<?php

chdir('..');
include_once 'service/RandonneeService.php';

header('Content-type: application/json');

$rs = new RandonneeService();

echo json_encode($rs->findAllApi());

