<?php

include_once 'service/MarqueService.php';
$ms = new MarqueService();

foreach ($ms->findAll() as $v){
    echo "e : ".$v->getId();
}


