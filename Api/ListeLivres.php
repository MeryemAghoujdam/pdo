<?php

chdir('..');
include_once 'service/Livre.php';
header('Content-type: application/json');
$li = new MarqueService();
echo json_encode($li->findAllApi());

