<?php
chdir('..');
include_once 'service/ClientService.php';
extract($_GET); 
 $s = new ClientService();
 if($op == 'add'){
    
    $s->create(new Client($id,$cin, $nom, $prenom,$tele, $ville));
}
else if ($op == 'update') {
    $_s = new Client($id,$cin, $nom, $prenom,$tele, $ville);
    $s->update($_s);
    }
else {
    $s->delete($s->findById($id));
}
 header("Location:../client.php");