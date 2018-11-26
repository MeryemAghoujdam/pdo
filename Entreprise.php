<!DOCTYPE html>
<?php
include_once 'service/EntrepriseService.php';
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion d'Entreprise</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <script src="script/script.js"></script>
    </head>
    <body>
        <?php
        include_once 'menu.php';
        ?>
        <div style="margin-left:20%;padding:1px 16px;height:1000px;">
            <form method="GET" action="controller/ControllerEntreprise.php">
            <fieldset>
                <legend id="legend1">Ajouter Entreprise</legend>
                <table id="gestion" border="0">
                  
                    <tr>
                        <td>Nom : </td>
                        <td><input id="nom" type="text" placeholder="Donner Le Nom de l'entreprise :" name="nom" value="" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Adresse : </td>
                        <td><input id="adresse" type="text" placeholder="Donner l'address :" name="adresse" value="" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Salarie : </td>
                        <td><input id="nombreDeSalarie" type="text" placeholder="le nombre de salarie" name="nombreDeSalarie" value="" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Numero de telephon : </td>
                        <td><input id="numTel" type="text" placeholder="num de telephone" name="numTel" value="" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" id="save" value="Add"/></td>
                        <input type="hidden" id="id" name="id"/>
                        <input type="hidden" id="ops" name="ops" value="insert">
                    </tr>
                </table>

            </fieldset>
        </form>

        <fieldset>
            <legend>Liste des locataires</legend>

            <table id="customers" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Salarie</th>
                        <th>Numero de telephon</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $s = new EntrepriseService();
                    if ($s->findAll() != 0) {
                        foreach ($s->findAll() as $v) {
                            ?>
                            <tr>
                                <td><?php echo $v->getId(); ?></td>
                                <td><?php echo $v->getNom(); ?></td>
                                <td><?php echo $v->getAdresse(); ?></td>
                                <td><?php echo $v->getNombreDeSalarie(); ?></td>
                                <td><?php echo $v->getNumTel(); ?></td>                                                 
                                <td><a href="controller/ControllerEntreprise.php?op=delete&id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                                <td><button onclick="entrepriseModification(<?php echo $v->getId(); ?>, '<?php echo $v->getNom(); ?>','<?php echo $v->getAdresse(); ?>', '<?php echo $v->getNombreDeSalarie(); ?>', '<?php echo $v->getNumTel(); ?>');">Update</button></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </fieldset>
        </div>
    </body>
</html>
