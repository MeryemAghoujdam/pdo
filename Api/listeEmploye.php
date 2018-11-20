<?php

chdir('..');
include_once 'service/EmployeService.php';

header('Content-type: application/json');

$ss = new EmployeService();
echo json_encode($ss->findAllApi());