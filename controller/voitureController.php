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
$v = new Voiture(0,serie,$marque,$prix,$puissance,$type);
if($ops == "insert"){
    $vs->create($v);
}
else if($ops=="update"){
    
}else{
    
}
header("Location:../index.php");