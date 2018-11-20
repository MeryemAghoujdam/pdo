<?php
chdir('..');
include_once 'service/MarqueService.php';
extract($_GET);

$ms = new MarqueService();

$ms->create(new Marque(0, $nom));

echo 'True';