<!DOCTYPE html>
<?php
include_once 'service/RandonneeService.php';
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des randonnees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="script/Randonnee.js"></script>
</head>
<body>
    <body>
        <form method="GET" action="controller/GestionRandonnee.php">
            <fieldset>
                <legend id="legend1">Ajouter Randonnee</legend>
                <table id="gestion" border="0">
                    <input id="op" type="hidden" name="op" value="add" />
                    <input id="num" type="hidden" name="id" value="" />
                    <tr>
                        <td>Direction : </td>
                        <td><input id="direction" type="text" name="direction" value="" /></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td>Date Départ : </td>
                        <td><input id="dateDepart" type="date" name="dateDepart" value="" /></td>
                        
                        <td>Date Retour : </td>
                        <td><input id="dateRetour" type="date" name="dateRetour" value="" /></td>
                        <td></td>
                        
                    </tr>
                    <tr>
                        <td>Prix : </td>
                        <td><input id="prix" type="text" name="prix" value="" /></td>
                        
                        
                    </tr>
                    
                    <tr>
                        
                        <td>Date Nombre de participants : </td>
                        <td><input id="nbParticipants" type="text" name="nombre_participants" value="" /></td>
                        <td></td>
                        <td></td>
                        <td><input id="save" type="submit" value="Ajouter" /></td>
                        
                    </tr>
                    
                    
                    </tr>
                </table>

            </fieldset>
        </form>

        <fieldset>
            <legend>Liste des randonnees</legend>

            <table id="customers" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Direction</th>
                        <th>Date Départ</th>
                        <th>Date Retour</th>
                        <th>Prix</th>
                        <th>Nombre de participants</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $Rs = new RandonneeService();
                    
                     
                    foreach ($Rs->findAll() as $v) {
                        ?>
                        <tr>
                            <td><?php echo $v->getId(); ?></td>
                            <td><?php echo $v->getDirection(); ?></td>
                            <td><?php echo $v->getDateDepart(); ?></td>
                            <td><?php echo $v->getDateRetour(); ?></td>
                            <td><?php echo $v->getPrix(); ?></td>
                            <td><?php echo $v->getNombre_participants(); ?></td>                                                    
                            <td><a href="controller/GestionRandonnee.php?op=delete&id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                            <td><button onclick="f(<?php echo $v->getId(); ?>, '<?php echo $v->getDirection(); ?>', '<?php echo $v->getDateDepart(); ?>', '<?php echo $v->getDateRetour(); ?>', '<?php echo $v->getPrix(); ?>', '<?php echo $v->getNombre_participants(); ?>');">Update</button></td>
                        </tr>
                        <?php
                    
                    }
                    ?>
                </tbody>
            </table>

        </fieldset>
</body>
</html>