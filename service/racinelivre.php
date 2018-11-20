<?php

include_once 'service/Livre.php';
$li = new Livre();

foreach ($li->findAll() as $v){
    echo "e : ".$v->getId();
}


