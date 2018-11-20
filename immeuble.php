<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'service/ImmeubleService.php';
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion des Immeubles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="script/immeuble.js"></script>
</head>
<body>
    <body>
        <form method="GET" action="controller/GestionImmeuble.php">
            <fieldset>
                <legend id="legend1">Ajouter Immeuble</legend>
                <table id="gestion" border="0">
                    <input id="op" type="hidden" name="op" value="add" />
                    <input id="num" type="hidden" name="id" value="" />
                    <tr>
                        <td>Adresse : </td>
                        <td><input id="Adresse" type="text" name="Adresse" value="" /></td>
                        <td></td>
                        <td>Nombre d'appartement : </td>
                        <td><input id="nbrappartement" type="text" name="nbrappartement" value="" /></td>
                    </tr>
                    <tr>
                        <td>Nom du propriétaire : </td>
                        <td><input id="nomPropriétaire" type="text" name="nomPropriétaire" value="" /></td>
                        <td></td>
                        <td>Entreprise de construction  : </td>
                        <td><input id="entrepriseConstruction" type="text" name="entrepriseConstruction " value="" /></td>
                    </tr>
                    <tr>
                        <td>Date de construction: </td>
                        <td><input id="dateConstruction" type="date" name="dateConstruction" value="" /></td>
                        <td></td>
                        <td></td>
                        <td><input id="save" type="submit" value="Ajouter" /></td>
                    </tr>
                    </tr>
                </table>

            </fieldset>
        </form>

        <fieldset>
            <legend>Liste des Immeubles</legend>

            <table id="customers" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Adresse</th>
                        <th>Nombre appartement</th>
                        <th>Nom du propriétaire</th>
                        <th>Entreprise de construction</th>
                        <th>Date de construction</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = new ImmeubleService();
                    
                    if($i->findAll()!=0)
                    {
                        
                    foreach ($i->findAll() as $v) {
                        ?>
                        <tr>
                            <td><?php echo $v->getId(); ?></td>
                            <td><?php echo $v->getAdresse(); ?></td>
                            <td><?php echo $v->getNbrappartement(); ?></td>
                            <td><?php echo $v->getNomPropriétaire(); ?></td>
                            <td><?php echo $v->getEntrepriseConstruction(); ?></td>
                            <td><?php echo $v->getDateConstruction(); ?></td>                                                    
                            <td><a href="controller/GestionImmeuble.php?op=delete&id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                            <td><button onclick="f(<?php echo $v->getId(); ?>, '<?php echo $v->getAdresse(); ?>', '<?php echo $v->getNbrappartement(); ?>', '<?php echo $v->getNomPropriétaire(); ?>', '<?php echo $v->getEntrepriseConstruction(); ?>', '<?php echo $v->getDateConstruction(); ?>');">Update</button></td>
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
