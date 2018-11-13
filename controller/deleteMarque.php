<?php
chdir('..');
include_once 'service/MarqueService.php';
extract($_GET);
$ms = new MarqueService();
$ms->delete($ms->findById($id));
header("Location:../marque.php");

