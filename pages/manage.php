<?php
session_start();
if (isset($_SESSION["USER"])) {
include_once '../service/EmployeService.php';
$ES = new EmployeService();
$_SESSION["USER"] = $ES->findByLogin($_SESSION["LOGIN"]);
$user = $_SESSION["USER"];
?>
<html>
    <head>
        <title>Gestion Voiture</title>
        <link href="../css/StyleVoiture.css" rel="stylesheet" type="text/css"/>
        <script src="../script/voitureScript.js" type="text/javascript"></script>
    </head>
    <body>
        <?php if($user->getProfile()->getLibelle() != "Employe"){?>
        <form id="form" method="GET" action="Controller.php">
            <span class="Msg">Gestion des employés</span>
            <input type="text" class="input" id="Nom" name="nom" placeholder="Nom" required/>
            <input type="text" class="input" id="Prenom" name="prenom" placeholder="Prénom" required/>
            <input type="text" class="input" id="Tel" name="tel" placeholder="Tél" required/>
            <input type="text" class="input" id="Sal" name="salaire" placeholder="Salaire" required/>
            <input type="text" class="input" id="Login" name="login" placeholder="Login" required/>
            <input type="text" class="input" id="Pass" name="password" placeholder="Mot de passe" required/>
            <select class="input" id="Profile" name="profile">
                <option value="0">Choisir un profil</option>
                <?php if($user->getProfile()->getLibelle() == "Admin"){ ?>
                <option value="1">Admin</option>
                <?php } ?>
                <?php if($user->getProfile()->getLibelle() == "Directeur"||$user->getProfile()->getLibelle() == "Admin"){ ?>
                <option value="2">Directeur</option>
                <?php } ?>
                <option value="3">Chef departement</option>
                <option value="4">Employe</option>
            </select>
            <input type="hidden" id="id" name="id"/>
            <input type="hidden" id="ops" name="ops" value="insert">
            <input type="submit" id="sub" value="Créer"/>
        </form>
<?php }?>
        <?php
        $VS = new EmployeService();
        if (count($VS->findAll()) > 0) {
        ?>
        <table border="0" id="Voitures">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Tél</th>
                    <th>Salaire</th>
                    <th>Login</th>
                    <th>Mot de passe</th>
                    <th>Profil</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ES = new EmployeService();
                foreach ($ES->findAll() as $v) {
                ?>
                <tr>
                    <td><?php echo $v->getNom() ?></td>
                    <td><?php echo $v->getPrenom() ?></td>
                    <td><?php echo $v->getTele() ?></td>
                    <td><?php echo $v->getSalaire() ?></td>
                    <td><?php echo $v->getLogin() ?></td>
                    <td><?php echo $v->getPassword() ?></td>
                    <td><?php echo $v->getProfile()->getLibelle() ?></td>
                    <?php if($user->getProfile()->getLibelle() != "Employe"){ ?>
                    <td><a class="BTN update" onclick="LoadToInputs('<?php echo $v->getId() ?>', '<?php echo $v->getNom() ?>', '<?php echo $v->getPrenom() ?>', '<?php echo $v->getTele() ?>', '<?php echo $v->getSalaire() ?>', '<?php echo $v->getLogin() ?>', '<?php echo $v->getPassword() ?>', '<?php echo $v->getProfile()->getId() ?>')">Modifier</a></td>
                    <?php if($user->getId()!=$v->getId()){?>
                    <td><a class="BTN delete" href="Controller.php?ops=delete&id=<?php echo $v->getId() ?>">supprimer</a></td>
                    <?php }?>
                    <?php } ?>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <?php } ?>
    </body>
    <?php } ?>
</html>
