
<?php
chdir('..');
include_once 'service/Livre.php';
extract($_GET);
$li = new Livre();
$li->delete($li->findById($id));
header("Location:../livre.php");