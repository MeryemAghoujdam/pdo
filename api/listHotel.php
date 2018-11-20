<?php

chdir('..');
include_once 'service/HotelService.php';

header('Content-type: application/json');

$ss = new HotelService();

echo json_encode($ss->findAllApi());