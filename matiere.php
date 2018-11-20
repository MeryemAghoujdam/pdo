<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    include_once './service/MatiereService.php';
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="script/matiere.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
       
        

    </head>
    
    <body>
        <?php
         include_once './menu.php';
         ?>
        <div style="margin-left:20%;padding:1px 16px;height:1000px;">

        <div id="mainContainer">
            <fieldset>
                <legend>Ajouter Matiere</legend>
                <form action="controller/MatiereCont.php" method="get">
                 <input type="hidden" id="trait"  name="trait" value="ajouter" />
                 <input id="ID" type="hidden" name="ID" value="" />
                    
                <table>
                     
                    <tr>
                        <td>Nom: </td>
                        <td><input type="text" id="nom" name="nom"></td>
                    </tr>
                    <tr>
                        <td>Coef: </td>
                        <td><input type="text" id="coef" name="coef"></td>
                    </tr>
                    <tr>
                        <td>Nombre des heures: </td>
                        <td><input type="text" id="nombreHeures" name="nombreHeures"></td>
                    </tr>
                    <tr>
                        <td>Abreviation: </td>
                        <td><input type="text" id="abreviation" name="abreviation"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input id="submit" type="submit" value="ajouter"></td>
                    </tr>
                </table>
            </form>
            </fieldset>
            
            <fieldset >
                <legend>Liste des matieres</legend>
                <table id="customers" border="0" >
                    <thead>
                        <tr >
                            <th>ID</th>             
                            <th>Nom</th>
                            <th>Coef</th>
                            <th>NombreHeures</th>
                            <th>Abreviation</th>

                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $MatS = new MatiereService();
                            foreach ($MatS->findAll() as $obj){
                                ?>
                        <tr>
                            <td><?php echo $obj->getId(); ?></td>
                            <td><?php echo $obj->getNom(); ?></td>                  
                            <td><?php echo $obj->getCoef(); ?></td>
                            <td><?php echo $obj->getNombreHeures(); ?></td>
                            <td><?php echo $obj->getAbreviation(); ?></td>

                            <td><button onclick="updateMatiere(<?php echo $obj->getId(); ?>,'<?php echo $obj->getNom(); ?>',<?php echo $obj->getCoef(); ?>,<?php echo $obj->getNombreHeures(); ?>,'<?php echo $obj->getAbreviation() ?>');">Modifier</button></td>
                            <td><button onclick="deleteMatiere(<?php echo $obj->getId(); ?>,'<?php echo $obj->getNom(); ?>',<?php echo $obj->getCoef(); ?>,<?php echo $obj->getNombreHeures(); ?>,'<?php echo $obj->getAbreviation() ?>');" >Supprimer</button></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
            </table>
            </fieldset>
            
        </div>
        
        </div>
    </body>
</html>
