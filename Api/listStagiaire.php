<?php

chdir('..');
include_once 'service/StagiaireService.php';

header('Content-type: application/json');

$ss = new StagiaireService();
echo json_encode($ss->findAllApi());