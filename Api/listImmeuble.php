<?php

chdir('..');
include_once 'service/ImmeubleService.php';

header('Content-type: application/json');

$im = new ImmeubleService();

echo json_encode($im->findAllApi()); 

