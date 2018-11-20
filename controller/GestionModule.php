<?php

chdir('..');
include_once 'service/moduleService.php';
extract($_GET);

$s = new moduleService();

if($op == 'add'){
    
    $s->create(new Module($id, $nom, $note, $coefficient, $periode));
}
elseif ($op == 'update') {
    $_s = new Module($id, $nom, $note, $coefficient, $periode);
    $s->update($_s);
    }
else {
    $s->delete($s->findById($id));
}

header("Location:../module.php");
