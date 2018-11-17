<?php
chdir('..');
include_once 'service/EmployeService.php';
extract($_GET);
 $s = new EmployeService();
 if($op == 'add'){
    
    $s->create(new Employe($id,$cin, $nom, $prenom,$tele, $salaire));
}
else if ($op == 'update') {
    $_s = new Employe($id,$cin, $nom, $prenom,$tele, $salaire);
    $s->update($_s);
    }
else {
    $s->delete($s->findById($id));
}
 header("Location:../employe.php");