<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'service/ClientService.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link  rel="stylesheet" type="text/css" href="css/style.css"/>
        <script src="script/client.js" type="text/javascript"></script>

        <title>Gestion des Clients </title>
        
        
    </head>
    <body>
          <?php 
        include_once 'menu.php';
        ?>
        <div style="margin-left:20%;padding:1px 16px;height:1000px;">

        <form method="GET" action="controller/GestionClient.php"  >
            
            <fieldset>
               
                <legend id="legend1">Ajouter Client</legend>
                <table id="gestion" border="0">
                    <input id="op" type="hidden" name="op" value="add" />
                    <input id="num" type="hidden" name="id" value="" />

                    <tr>
                        <td >  Cin : </td>
                        <td ><input id="cin" type="text" name="cin" value=""placeholder="Tapez votre cin" /></td>
                        <td></td>
                         <td>Ville : </td>
                        <td><input id="ville" type="text" name="ville" value="" placeholder="Tapez votre ville" /></td>
                    </tr>
                    <tr>
                        <td>Nom : </td>
                        <td><input id="nom" type="text" name="nom" value="" placeholder="Tapez votre nom" /></td>
                        <td></td>
                         <td>Telephon : </td>
                         <td><input id="tele" type="text" name="tele" value="" placeholder="+262 00 000 00 00" /></td>
                        <td></td>
                    </tr>

                    <tr>
                       
                         
                         <td>Prenom : </td>
                        <td><input id="prenom" type="text" name="prenom" value=""placeholder="Tapez votre prenom"  /></td>
                        <td></td>
                        <td></td>
                        <td><input id="save" type="submit" value="Ajouter" /></td>
                    </tr>
                   

                     

                </table>
            </fieldset>

        </form>  

        <fieldset>
            <legend>Liste des clients</legend>
            <table id="customers" border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cin</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Telephon</th>
                        <th>Ville</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $s = new ClientService();

                    if ($s->findAll() != 0) {

                        foreach ($s->findAll() as $v) {
                            ?>
                            <tr>
                                <td><?php echo $v->getId(); ?></td>
                                <td><?php echo $v->getCin(); ?></td>
                                <td><?php echo $v->getNom(); ?></td>
                                <td><?php echo $v->getPrenom(); ?></td>
                                <td><?php echo $v->getTele(); ?></td>
                                <td><?php echo $v->getVille(); ?></td>                                                    
                                <td><a href="controller/GestionClient.php?op=delete&id=<?php echo $v->getId(); ?>">Supprimer</a></td>
                                <td><button onclick="f(<?php echo $v->getId(); ?>, '<?php echo $v->getCin(); ?>', '<?php echo $v->getNom(); ?>', '<?php echo $v->getPrenom(); ?>', '<?php echo $v->getTele(); ?>', '<?php echo $v->getVille(); ?>');">Update</button></td>
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
