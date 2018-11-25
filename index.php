<?php session_start(); ?>
<html>
    <head>
        <title>Login : Gestion Employé</title>
        <script src="script/index.js" type="text/javascript"></script>
        <link href="css/indexStyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            extract($_GET);
            if(!isset($_SESSION['USER'])){
        ?>
        <div class="ContainerForm">
            <div class="Title">Connection</div>
            <form id="connectionFrom" method="POST" action="pages/home.php">
                <input type="text" class="loginInfo" autocomplete="off" name="login" required placeholder="Login"/>
                <input type="password" class="loginInfo" name="pass" required placeholder="Mot de passe"/>
                <input type="submit" class="loginInfo sumit" value="Connexion"/>
            </form>
        </div>
        <p id="ErrMSG"></p>
        <?php
            }else if(isset($_SESSION['USER'])&&$state!=-1){
                header("Location:pages/home.php");
            }else if($state==-1){
                session_destroy();
        ?>
        <script type="text/javascript">
            window.onload=function (){
                window.location="?";
            }
        </script>
        <div class="ContainerForm">
            <div class="Title">Connection</div>
            <form id="connectionFrom" method="POST" action="pages/home.php">
                <input type="text" class="loginInfo" autocomplete="off" name="login" required placeholder="Login"/>
                <input type="password" class="loginInfo" name="pass" required placeholder="Mot de passe"/>
                <input type="submit" class="loginInfo sumit" value="Connexion"/>
            </form>
        </div>
        <p id="ErrMSG"></p>
        <?php }?>
    </body>
</html>

