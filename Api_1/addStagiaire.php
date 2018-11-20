<?php
chdir('..');
include_once 'service/StagiaireService.php';
extract($_GET);

$ss = new StagiaireService();

$ss->create(new Stagiaire($id, $nom, $prenom, $daten, $tele, $email));

echo 'True';
