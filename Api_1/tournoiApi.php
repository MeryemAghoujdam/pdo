<?php

chdir('..');
include_once 'service/ListTounroi.php';

header('Content-type: application/json');

$lt = new ListTounroi();
echo json_encode($lt->findAllApi());

