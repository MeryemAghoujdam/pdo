<html>
    <?php
    //check login
    include_once './../service/EmployeService.php';
    extract($_POST);
    if (session_status()==PHP_SESSION_NONE) {
        $ES = new EmployeService();
        $emp = $ES->findByLogin($login);
        if ($emp->getLogin()=="") {
            header("Location: ../index.php?state=0");
        }else{
            if($emp->getPassword()!=$pass){
                header("Location: ../index.php?state=1");
            }else{
                if (session_status()==PHP_SESSION_NONE) {
                    session_start();
                    $_SESSION["USER"]=$emp;
                }
            }
        }
        $user = $_SESSION["USER"];
    ?>
    <head>
        <title>Panneau : <?php echo $user->getLogin();?></title>
        <link href="../css/fontawesome/css/all.css" rel="stylesheet" type="text/css" crossorigin="anonymous"/>
        <link href="../css/indexStyle.css" rel="stylesheet" type="text/css"/>
        <script src="../script/home.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="NavBar">
            <button class="Menu" onclick="showMenu()"><i class="fas fa-bars"></i></button>
        </div>
        <div class="MenuBlock" id="menuBlock">
            <div class="menuItem"><i class="fas fa-home"></i> Acceuil</div>
        </div>
    </body>
    <?php }?>
</html>

