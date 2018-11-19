<!DOCTYPE html>
<?php
include_once 'service/Etablissementservice.php';
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion ETABLISSEMENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="script/etabjava.js"></script>
    </head>
<body>
    <body>
        <form method="GET" action="controller/Etb.php">
            <fieldset>
                <legend id="legend1">Ajouter Etablissment</legend>
                <table id="gestion" border="0">
                    <input id="op" type="hidden" name="op" value="add" />
                    <input id="num" type="hidden" name="id" value="" />
                    <tr>
                        <td>Nom : </td>
                        <td><input id="nom" type="text" name="nom" value="" /></td>
                        <td></td>
                        <td>Adresse : </td>
                        <td><input id="adresse" type="text" name="adresse" value="" /></td>
                    </tr>
                    <tr>
                        <td>Type : </td>
                        <td><input id="type" type="text" name="type" value="" /></td>
                        <td></td>
                        <td>Capacite : </td>
                        <td><input id="capacite" type="int" name="capacite" value="" /></td>
                        <td><input id="save" type="submit" value="Ajouter" /></td>
                    </tr>
                    
                    </tr>
                </table>

            </fieldset>
        </form>

        <fieldset>
            <legend>Liste des Etablissements</legend>

            <table id="customers" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Type</th>
                        <th>Capacite</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $s = new Etablissementservice();
                    
                    if($s->findAll()!=0)
                    {
                        
                    foreach ($s->findAll() as $v) {
                        ?>
                        <tr>
                            <td><?php echo $v->getId(); ?></td>
                            <td><?php echo $v->getNom(); ?></td>
                            <td><?php echo $v->getAdresse(); ?></td>
                            <td><?php echo $v->getType(); ?></td>
                            <td><?php echo $v->getCapacite(); ?></td>
                                                                          
                            <td><a href="controller/Etb.php?op=delete&id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                            <td><button onclick="f(<?php echo $v->getId(); ?>, '<?php echo $v->getNom(); ?>', '<?php echo $v->getAdresse(); ?>', '<?php echo $v->getType(); ?>', '<?php echo $v->getCapacite(); ?>');">Update</button></td>
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