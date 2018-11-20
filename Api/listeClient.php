
<?php

chdir('..');
include_once 'service/ClientService.php';

header('Content-type: application/json');

$ss = new ClientService();
echo json_encode($ss->findAllApi());