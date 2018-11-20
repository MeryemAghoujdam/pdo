<?php
chdir('..');
include_once 'service/ClientService.php';
extract($_GET);

$ss = new ClientService();

$ss->create(new Client($id, $cin, $nom, $prenom, $tele, $ville));

echo 'True';

