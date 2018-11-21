<html>
    <?php
    //check login
    if (session_status() == PHP_SESSION_ACTIVE) {
        $login=$_SESSION["USER"];
        $pass=$_SESSION["PASS"];
    }
    include_once './../service/EmployeService.php';
    extract($_POST);
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
                $_SESSION["USER"]=$login;
                $_SESSION["PASS"]=$pass;
            }
            echo 'Hello '.$emp->getId();
        }
    }
    ?>
    <head>
        <title>Home :<></title>
    </head>
    <body>
        
    </body>
</html>

