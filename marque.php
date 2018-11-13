<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once 'service/MarqueService.php';
?>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <script src="script/script.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        <title>Gestion des marques</title>
    </head>
    <body>
        <form method="GET" action="controller/addMarque.php">
            <fieldset>
                <legend>Ajouter Marque</legend>
                <table border="0">
                    <input id="op" type="hidden" name="op" value="add" />
                    <input id="num" type="hidden" name="id" value="" />
                    <tr>
                        <td>Nom : </td>
                        <td><input id="nom" type="text" name="nom" value="" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="save" type="submit" value="Ajouter" /></td>
                    </tr>

                </table>

            </fieldset>
        </form>

        <fieldset>
            <legend>Liste des marques</legend>

            <table id="customers" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ms = new MarqueService();
                    foreach ($ms->findAll() as $v) {
                        ?>
                        <tr>
                            <td><?php echo $v->getId(); ?></td>
                            <td><?php echo $v->getNom(); ?></td>
                            <td><a href="controller/deleteMarque.php?id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                            <td><button onclick="f(<?php echo $v->getId(); ?>, '<?php echo $v->getNom(); ?>');">Update</button></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

        </fieldset>
    </body>
</html>