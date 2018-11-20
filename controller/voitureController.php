<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
chdir("../");
include_once 'service/VoitureService.php';
include_once 'beans/Voiture.php';

extract($_GET);

$vs = new VoitureService();

if($ops == "insert"){
    $v = new Voiture(0,$serie,$marque,$prix,$puissance,$type);
    $vs->create($v);
}
else if($ops=="update"){
    $v = new Voiture($id,$serie,$marque,$prix,$puissance,$type);
    $vs->update($v);
}else{
    $v = new Voiture($id,"N","N","N","N","N");
    $vs->delete($v);
}
header("Location:../indexVoiture.php");