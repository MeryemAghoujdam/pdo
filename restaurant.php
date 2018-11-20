<!DOCTYPE html>
<?php
include_once 'service/RestaurantService.php';
?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion des Restaurants</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <script src="script/script.js"></script>
    </head> 
    <body>
        <form method="GET" action="controller/GestionRestaurant.php">
                <fieldset>
                    <legend id="legend1">Ajouter Restaurant</legend>
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
                            <td>Adresse : </td>
                            <td><input id="adresse" type="text" name="adresse" value="" /></td>
                            <td></td>
                            <td>Nombre des tables : </td>
                            <td><input id="nbrtable" type="text" name="nbrtable" value="" /></td>
                        </tr>
                        <tr>
                            <td>Nombre des étoiles </td>
                            <td><input id="nbretoile" type="text" name="nbretoile" value="" /></td>
                            <td></td>
                            <td></td>
                            <td><input id="save" type="submit" value="Ajouter" /></td>
                        </tr>
                        </tr>
                    </table>

                </fieldset>
            </form>


            <fieldset>
                <legend>Liste des Restaurants</legend>

                <table id="customers" border="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Nombre des tables </th>
                            <th>Adresse</th>
                            <th>Telephon</th>
                            <th>Nombre des étoiles</th>
                            <th>Supprimer</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $s = new RestaurantService();

                        if ($s->findAll() != 0) {

                            foreach ($s->findAll() as $v) {
                                ?>
                                <tr>
                                    <td><?php echo $v->getId(); ?></td>
                                    <td><?php echo $v->getNom(); ?></td>
                                    <td><?php echo $v->getNbrTable(); ?></td>
                                    <td><?php echo $v->getAdresse(); ?></td>
                                    <td><?php echo $v->getTele(); ?></td>
                                    <td><?php echo $v->getNbrEtoile(); ?></td>                                                    
                                    <td><a href="controller/GestionRestaurant.php?op=delete&id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                                    <td><button onclick="gestionRestaurant(<?php echo $v->getId(); ?>, '<?php echo $v->getNom(); ?>', '<?php echo $v->getNbrTable(); ?>', '<?php echo $v->getAdresse(); ?>', '<?php echo $v->getTele(); ?>', '<?php echo $v->getNbrEtoile(); ?>');">Update</button></td>
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


