<?php

chdir('..');
include_once 'service/MarqueService.php';

header('Content-type: application/json');

$ms = new MarqueService();

json_encode($ms->findAllApi());

