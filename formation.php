<!DOCTYPE html>
<?php
include_once 'service/FormationService.php';
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des stagiaires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="script/FormationScript.js"></script>
</head>
<body>
    <body>
        <form method="GET" action="controller/ControllerFormation.php">
            <fieldset>
                <legend id="legend1">Add Formation</legend>
                <table id="gestion" border="0">
                    <input id="op" type="hidden" name="op" value="add" />
                    <input id="num" type="hidden" name="id" value="" />
                    <tr>
                        <td>Nom : </td>
                        <td><input id="Nom" type="text" name="Nom" value="" /></td>
                        <td></td>
                        <td>Location : </td>
                        <td><input id="Location" type="text" name="Location" value="" /></td>
                    </tr>
                    <tr>
                        <td>Date Fin : </td>
                        <td><input id="DateFin" type="date" name="DateFin" value="" /></td>
                        <td></td>
                        <td>Date Depart : </td>
                        <td><input id="DateDep" type="date" name="DateDep" value="" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input id="save" type="submit" value="add" /></td>
                    </tr>
                    </tr>
                </table>

            </fieldset>
        </form>

        <fieldset>
            <legend>Liste des Formations</legend>

            <table id="customers" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Location</th>
                        <th>Date Depart</th>
                        <th>Date Fin</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $f = new FormationService();
                    
                    if($f->findAll()!=0)
                    {
                        
                    foreach ($f->findAll() as $v) {
                        ?>
                        <tr>
                            <td><?php echo $v->getId(); ?></td>
                            <td><?php echo $v->getNom(); ?></td>
                            <td><?php echo $v->getLocation(); ?></td>
                            <td><?php echo $v->getDateDep(); ?></td>
                            <td><?php echo $v->getDateFin(); ?></td>                                                  
                            <td><a href="controller/ControllerFormation.php?op=delete&id=<?php echo $v->getId(); ?>">delete</a></td>
                            <td><button onclick="f(<?php echo $v->getId(); ?>, '<?php echo $v->getNom(); ?>', '<?php echo $v->getDateDep(); ?>', '<?php echo $v->getDateFin(); ?>','<?php echo $v->getLocation(); ?>');">Update</button></td>
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