<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/StyleEcole.css" rel="stylesheet" type="text/css"/>
        <script src="script/EcoleScript.js" type="text/javascript"></script>
        <title>Gestion des Voiture</title>
    </head>
    <body>
         <form id="form" method="GET" action="EcoleConroller.php">
                <fieldset>
                 <legend>Gestion des Ecoles</legend>
                  <table border="0">
                    <input id="op" type="hidden" name="op" value="add" />
                    <input id="num" type="hidden" name="id" value="" />
                    <tr>
                        <td>Nom de l'ecole : </td>
                        <td><input id="nom" type="text" name="nom" value="" /></td>
                    </tr>
                    <tr>
                        <td>Capacité : </td>
                        <td><input type="number" class="input" id="capacite" name="capacite" placeholder=""/></td>
                    </tr>
                    <tr>
                        <td>Nombre de salle</td>
                        <td><input type="number" class="input" id="nombreDeSalle" name="nombreDeSalle" placeholder=""/></td>
                        
                    </tr>
                    <tr>
                        <td>Numero de telephone</td>
                        <td><input type="text" class="input" id="numerodeTel" name="numerodeTel" placeholder=""/></td>
                    </tr>
                    <tr>
                            <td>
                                <label>Adresse : </label></td>
                              <td> 
                                  <textarea name="" id="" cols="30" rows="10">
                                  </textarea>
                              </select>
                            </td>
                    </tr>
                    <tr>
                        <td><input id="save" type="submit" value="Ajouter" /></td>
                        <td><input id="update" type="submit" value="Modifier" /></td>
                        <td><input id="delete" type="submit" value="Supprimer" /></td>
                    </tr>
                </table>
            </fieldset>
        </form>
            <?php
            $ES = new EcoleService();
            if(count($ES->findAll())>0){
            ?>       
            <table border="0" id="Ecole">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Capacite</th>
                        <th>Adresse</th>
                        <th>Nombre De Salle</th>
                        <th>Numero de Tel</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ES = new EcoleService();
                    foreach ($ES->findAll() as $e) {
                    ?>
                    <tr>
                        <td><?php echo $e->getNom()?></td>
                        <td><?php echo $e->getCapacite()?></td>
                        <td><?php echo $e->getAdresse()?></td>
                        <td><?php echo $e->getNombreDeSalle()?></td>
                        <td><?php echo $e->getNumTel()?></td>
                        <td><a class="btn update" onclick="LoadToInputs('<?php echo $e->getId()?>','<?php echo $e->getNom()?>','<?php echo $e->getCapacite()?>','<?php echo $e->getAdresse()?>','<?php echo $e->getNombreDeSalle()?>','<?php echo $e->getNumTel()?>')">Modifier</a></td>
                        <td><a class="btn delete" href="EcoleConroller.php?ops=delete&id=<?php echo $v->getId()?>">supprimer</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php 
            }?>
    </body>
</html>
