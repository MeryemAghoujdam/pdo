<?php
session_start();
include_once '../beans/Employe.php';
include_once '../beans/Profil.php';
include_once '../service/EmployeService.php';
extract($_GET);
$ES = new EmployeService();
if (isset($ops)) {
    if ($ops == "insert") {
        $emp = new Employe(0, $nom, $prenom, $tel, $salaire, $login, $password, new Profil($profile,"",""));
        $ES->create($emp);
        header("Location:manage.php");
    } else if ($ops == "update") {
        $_SESSION["USER"] = $ES->findByLogin($_SESSION["LOGIN"]);
        $user = $_SESSION["USER"];
        $emp = new Employe($id, $nom, $prenom, $tel, $salaire, $login, $password, new Profil($profile,"",""));
        if ($user->getId()!=$id) {
            $ES->update($emp);
            header("Location:manage.php");
        }else{
            $ES->update($emp);
            $_SESSION["LOGIN"]=$emp->getLogin();
            header("Location:manage.php");
        }
    } else {
        $emp = new Employe($id, "", "", "", "", "", "", "");
        $ES->delete($emp);
        header("Location:manage.php");
    }
}

