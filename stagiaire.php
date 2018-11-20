<!DOCTYPE html>
<?php
include_once 'service/StagiaireService.php';
?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion des stagiaires</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <script src="script/script.js"></script>
    </head>
    <body>
    <body>
        <?php
        include_once 'menu.php';
        ?>
        <div style="margin-left:20%;padding:1px 16px;height:1000px;">

            <form method="GET" action="controller/GestionStagiaire.php">
                <fieldset>
                    <legend id="legend1">Ajouter Stagiaire</legend>
                    <table id="gestion" border="0">
                        <input id="op" type="hidden" name="op" value="add" />
                        <input id="num" type="hidden" name="id" value="" />
                        <tr>
                            <td>Nom : </td>
                            <td><input id="nom" type="text" name="nom" value="" /></td>
                            <td></td>
                            <td>Telephon : </td>
                            <td><input id="tele" type="text" name="tele" value="" /></td>
                        </tr>
                        <tr>
                            <td>Prenom : </td>
                            <td><input id="prenom" type="text" name="prenom" value="" /></td>
                            <td></td>
                            <td>Email : </td>
                            <td><input id="email" type="email" name="email" value="" /></td>
                        </tr>
                        <tr>
                            <td>Date naissance : </td>
                            <td><input id="daten" type="date" name="daten" value="" /></td>
                            <td></td>
                            <td></td>
                            <td><input id="save" type="submit" value="Ajouter" /></td>
                        </tr>
                        </tr>
                    </table>

                </fieldset>
            </form>

            <fieldset>
                <legend>Liste des stagiaires</legend>

                <table id="customers" border="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date naissance</th>
                            <th>Telephon</th>
                            <th>Email</th>
                            <th>Supprimer</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $s = new StagiaireService();

                        if ($s->findAll() != 0) {

                            foreach ($s->findAll() as $v) {
                                ?>
                                <tr>
                                    <td><?php echo $v->getId(); ?></td>
                                    <td><?php echo $v->getNom(); ?></td>
                                    <td><?php echo $v->getPrenom(); ?></td>
                                    <td><?php echo $v->getDaten(); ?></td>
                                    <td><?php echo $v->getTele(); ?></td>
                                    <td><?php echo $v->getEmail(); ?></td>                                                    
                                    <td><a href="controller/GestionStagiaire.php?op=delete&id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                                    <td><button onclick="stagiaireModification(<?php echo $v->getId(); ?>, '<?php echo $v->getNom(); ?>', '<?php echo $v->getPrenom(); ?>', '<?php echo $v->getDaten(); ?>', '<?php echo $v->getTele(); ?>', '<?php echo $v->getEmail(); ?>');">Update</button></td>
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