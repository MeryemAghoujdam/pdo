<?php

chdir('..');
include_once 'service/ListTounroi.php';
extract($_GET);
$lt=new ListTounroi();
if($submit=='Ajouter')
{
    $lt->create(new Tournoi($idtourn,$type,$nomjr,$prenomjr,$datetournoi,$score));
}
else if($submit=='Supprimer')
{
    $lt->delete($id);
}
else
{
    $lt->update(new Tournoi($idtourn,$type,$nomjr,$prenomjr,$datetournoi,$score));
}

header("Location:../tournoi.php");

