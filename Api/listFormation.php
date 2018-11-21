<?php
chdir('..');
include_once 'service/FormationService.php';

header('Content-type: application/json');

$ff = new FormationService();
echo json_encode($ff->findAllApi());


