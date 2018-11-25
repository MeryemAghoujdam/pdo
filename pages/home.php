<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <?php
    //check login
    include_once './../service/EmployeService.php';
    include_once './../beans/Employe.php';
    if (!isset($_SESSION["USER"]) || !isset($_SESSION["LOGIN"])) {
        extract($_POST);
        $ES = new EmployeService();
        $emp = $ES->findByLogin($login);
        if ($emp->getLogin() == "") {
            session_destroy();
            header("Location: ../index.php?state=0");
        } else {
            if ($emp->getPassword() != $pass) {
                session_destroy();
                header("Location: ../index.php?state=1");
            } else {
                $_SESSION["USER"] = $emp;
                $_SESSION["LOGIN"] = $login;
            }
        }
        $user = $_SESSION["USER"];
    } else {
        $ES = new EmployeService();
        $_SESSION["USER"] = $ES->findByLogin($_SESSION["LOGIN"]);
        $user = $_SESSION["USER"];
    }
    ?>
    <head>
        <title>Panneau : <?php echo $user->getLogin(); ?></title>
        <link href="../css/fontawesome/css/all.css" rel="stylesheet" type="text/css" crossorigin="anonymous"/>
        <link href="../css/indexStyle.css" rel="stylesheet" type="text/css"/>
        <script src="../script/home.js" type="text/javascript"></script>
        <script type="text/javascript">
            window.onload = function () {
                var webView = document.getElementById("webView");
                webView.style.height = window.innerHeight - 64 + "px";
            }
        </script>
    </head>
    <body>
        <div class="NavBar">
            <button class="menu" onclick="showMenu(this)"><i class="fas fa-bars"></i></button>
            <div class="USER"><?php echo $user->getNom() . " " . $user->getPrenom(); ?></div>
        </div>
        <div class="MenuBlock" id="menuBlock">
            <div class="menuItem" onclick="changeIframSrc('Acceuil.php')"><i class="fas fa-home"></i>&nbsp;&nbsp;Acceuil</div>
            <?php
            //Selon les droits d'accés'
            if ($user->getProfile()->getLibelle() != "Employe") {
                ?>
            <div class="menuItem" onclick="changeIframSrc('manage.php')"><i class="fas fa-users"></i>&nbsp;&nbsp;Gérer les Comptes</div>
            <?php } else { ?>
                <div class="menuItem" onclick="changeIframSrc('manage.php')"><i class="fas fa-list-ol"></i>&nbsp;&nbsp;Les employés</div>
            <?php } ?>
            <a class="menuItem" href="../index.php?state=-1"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Quitter</a>
        </div>
        <iframe src="Acceuil.php" id="webView"></iframe>
    </body>
</html>

