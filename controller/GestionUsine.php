<?php
chdir('..');
include_once 'service/UsineService.php';
extract($_GET); 
 $s = new UsineService();
 if($op == 'add'){
    
    $s->create(new Usine($Id, $Nom, $Adresse, $Categorie, $NombreOfEmployer, $Capacite, $Espace));
}
else if ($op == 'update') {
    $_s = new Usine($Id, $Nom, $Adresse, $Categorie, $NombreOfEmployer, $Capacite, $Espace);
    $s->update($_s);
    }
else {
    $s->delete($s->findById($id));
}
 header("Location:../usine.php");
