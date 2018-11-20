<!DOCTYPE html>
<?php
include_once 'service/ProfilService.php';
?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion des profils </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <script src="script/script.js"></script>
    </head>
    <body>
    <body>
        <form method="GET" action="controller/gestionProfil.php">
            <fieldset>
                <legend id="legend1">Ajouter profil</legend>
                <table id="gestion" border="0">
                    <input id="op" type="hidden" name="op" value="add" />
                    <input id="id" type="hidden" name="id" value="" />
                    <tr>
                        <td>Libelle : </td>
                        <td><input id="libelle" type="text" name="libelle" value="" required/></td>
                    </tr>
                    <tr>
                        <td>Code : </td>
                        <td><input id="code" type="password" name="code" value="" required/></td>
                    </tr>
                    <tr>
                        <td colspan="2" ><input id="save" type="submit" value="Ajouter" style="width: 100% !important;"/></td>
                    </tr>
                    </tr>
                </table>

            </fieldset>
        </form>

        <fieldset>
            <legend>Liste des profils</legend>

            <table id="customers" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Libelle</th>
                        <th>Code</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ps = new ProfilService();
                    if ($ps->findAll() != 0) {

                        foreach ($ps->findAll() as $v) {
                            ?>
                            <tr>
                                <td><?php echo $v->getId(); ?></td>
                                <td><?php echo $v->getLibelle(); ?></td>
                                <td><?php echo $v->getCode(); ?></td>                                                   
                                <td><a href="controller/gestionProfil.php?op=delete&id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                                <td><button onclick="profilModification(<?php echo $v->getId(); ?>, '<?php echo $v->getLibelle(); ?>', '<?php echo $v->getCode(); ?>');">Update</button></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>

        </fieldset>
    </body>
</html>