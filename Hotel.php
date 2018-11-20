<!DOCTYPE html>
<?php
include_once 'service/HotelService.php';
?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion d'Hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <script src="script/Hotel.js"></script>
    </head>
    <body>
        <form method="GET" action="controller/GestionHotel.php">
            <fieldset>
                <legend id="legend1">Ajouter Locataire</legend>
                <table id="gestion" border="0">
                    <input id="op" type="hidden" name="op" value="add" />
                    <input id="num" type="hidden" name="id" value="" />
                    <tr>
                        <td>Client : </td>
                        <td><input id="client" type="text" name="client" value="" /></td>
                        <td></td>
                        <td>Numero de Chambre : </td>
                        <td><input id="numC" type="text" name="numC" value="" /></td>
                        <td>Nombre des Jours: </td>
                        <td><input id="nbrJ" type="text" name="nbrJ" value="" /></td>
                        <td></td>
                        <td>Prix : </td>
                        <td><input id="prix" type="text" name="prix" value="" /></td>
                        <td></td>
                        <td></td>
                        <td><input id="save" type="submit" value="Ajouter" /></td>
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
                        <th>Client</th>
                        <th>Numero de Chambre</th>
                        <th>Nombre des Jours</th>
                        <th>Prix</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $s = new HotelService();                   
                    if($s->findAll()!=0)
                    {                       
                    foreach ($s->findAll() as $v) {
                        ?>
                        <tr>
                            <td><?php echo $v->getId(); ?></td>
                            <td><?php echo $v->getClient(); ?></td>
                            <td><?php echo $v->getNumChambre(); ?></td>
                            <td><?php echo $v->getNbrJours(); ?></td>
                            <td><?php echo $v->getPrix(); ?></td>                                                 
                            <td><a href="controller/GestionHotel.php?op=delete&id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                            <td><button onclick="Hotel(<?php echo $v->getId(); ?>, '<?php echo $v->getClient(); ?>', '<?php echo $v->getNumChambre(); ?>', '<?php echo $v->getNbrJours(); ?>', '<?php echo $v->getPrix(); ?>');">Update</button></td>
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
