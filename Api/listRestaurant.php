<?php
chdir('..');
include_once 'service/RestaurantService.php';
header('Content-type: application/json');
$ms = new RestaurantService();
echo json_encode($ms->findAllApi());
