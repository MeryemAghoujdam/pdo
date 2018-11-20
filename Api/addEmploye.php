<?php
chdir('..');
include_once 'service/EmployeService.php';
extract($_GET);

$ss = new EmployeService();

$ss->create(new Employe($id, $cin, $nom, $prenom, $tele, $salaire));

echo 'True';