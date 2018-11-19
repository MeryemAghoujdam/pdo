<?php


chdir("../");
include_once 'service/FormationService.php';
include_once 'beans/Formation.php';

extract($_GET);

$fs = new FormationService();

if($op == "add"){
    $fs->create(new Formation(0,$Nom,$DateDep,$DateFin,$Location));
}
else if($op=="update"){
    $_f = new Formation($id,$Nom,$DateDep,$DateFin,$Location);
    $fs->update($_f);
}else{
    $f = new Formation($id,"N","N","N","N");
    $fs->delete($f);
}
header("Location:../indexFormation.php");