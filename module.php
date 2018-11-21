<!DOCTYPE html>
<?php
include_once 'service/moduleService.php';
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <meta charset="utf-8" />
    <title>Gestion des modules</title>
    <script src="script/module.js" type="text/javascript"></script>
</head>


    <body>
         <?php
        include_once 'menu.php';
        ?>
        <div style="margin-left: 20% ; padding: 1px 16px ; height: 1000px ;">
        <form method="GET" action="controller/GestionModule.php">
            <fieldset>
               
                <legend id="legend1">Ajouter Module</legend>
                <table id="gestion" border="0">
                    <input id="op" type="hidden" name="op" value="add" />
                    <input id="num" type="hidden" name="id" value="" />
                    <tr>
                        <td>Nom : </td>
                        <td><input id="nom" type="text" name="nom" value="" /></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Note : </td>
                        <td><input id="note" type="text" name="note" value="" /></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>Coeffcient : </td>
                        <td><input id="coef" type="text" name="coefficient" value="" /></td>
                        <td></td>
                    
                    </tr>
                    <tr>
                        <td>Periode : </td>
                        <td><input id="per" type="text" name="periode" value="" /></td>
                        <td></td>
                       <td></td>
                        <td><input id="save" type="submit" value="Ajouter" /></td>
                    </tr>
                   
                </table>

            </fieldset>
        </form>
        
        
        <fieldset>
            <legend>Liste des Modules</legend>

            <table id="liste" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Note</th>
                        <th>Cefficient</th>
                        <th>Periode</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $s = new ModuleService();
                    
                    if($s->findAll()!=0)
                    {
                        
                    foreach ($s->findAll() as $v) {
                        ?>
                        <tr>
                            <td><?php echo $v->getId(); ?></td>
                            <td><?php echo $v->getNom(); ?></td>
                            <td><?php echo $v->getNote(); ?></td>
                            <td><?php echo $v->getCoefficient(); ?></td>
                             <td><?php echo $v->getPeriode(); ?></td>                                                
                             <td><a href="controller/GestionModule.php?op=delete&id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                            <td><button onclick="f(<?php echo $v->getId(); ?>, '<?php echo $v->getNom(); ?>', '<?php echo $v->getNote(); ?>', '<?php echo $v->getCoefficient(); ?>', '<?php echo $v->getPeriode(); ?>');">Update</button></td>
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
        