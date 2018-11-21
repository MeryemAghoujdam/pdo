<html>
    <head>
        <title>Login : Gestion Employé</title>
        <script src="script/index.js" type="text/javascript"></script>
        <link href="css/indexStyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
            <div class="ContainerForm">
                <div class="Title">Connection</div>
                <form id="connectionFrom">
                    <input type="text" class="loginInfo" autocomplete="off" name="login" placeholder="Login"/>
                    <input type="password" class="loginInfo" name="pass" placeholder="Mot de passe"/>
                    <input onclick="connectionValidation()" type="submit" class="loginInfo sumit" value="Connexion"/>
                </form>
            </div>
        <p id="ErrMSG"></p>
    </body>
</html>

