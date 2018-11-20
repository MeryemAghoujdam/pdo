<!DOCTYPE html>


<?php

include_once './service/ListTounroi.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestion des Tournoi</title>
        <script src="script/script.js" type="text/javascript"></script>
        
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <style rel="stylesheet" type="text/css">
            #idtourn{
                display: none;
            }
            </style>
    </head>
    <body>
        <?php
        include_once 'menu.php';
        ?>
        <div style="margin-left:20%;padding:1px 16px;height:1000px;text-align: center;">
        <form method="GET" action="controller/GestionTournoi.php">
                <fieldset>
                    <legend id="legend1">Ajouter Tournoi</legend>
                    <table id="gestion" border="0" style="font-family: cursive;">
                        
                        <input id="idtourn" type="text" name="idtourn" value="" type="hidden" />
                        <tr>
                            <td>Type Tournoi : </td>
                            <td>
                                <select name="type" id="typrtr" hidden="select type ">
                                    <option>Normal</option>
                                    <option>Difficile</option>
                                    <option>Facile</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Nom de Joueur : </td>
                            <td><input id="nomjr" type="text" name="nomjr"/></td>
                        </tr>
                         <tr>
                            <td>Prenom de Joueur : </td>
                            <td><input id="prenomjr" type="text" name="prenomjr"/></td>
                        </tr>
                        <tr>
                            <td>Date De Tournoi : </td>
                            <td><input id="datetournoi" type="date" name="datetournoi" value="" /></td>
                        </tr>
                         <tr>
                            <td>Score de Joueur : </td>
                            <td><input id="score" type="number" name="score"/></td>
                        </tr>
                         <tr>
                            <td></td>
                            <td><input id="submit" type="submit" name="submit" value="Ajouter"/></td>
                        </tr>
                        </tr>
                    </table>

                </fieldset>
            </form>
        
            <fieldset>
                <legend>Liste des stagiaires</legend>

                <table id="customers" border="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Type de Tournoi</th>
                            <th>Nom & Prenom de joueur</th>
                            <th>Date de tournoi</th>
                            <th>score de joueur</th>
                            <th>Supprimer</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $lst = new ListTounroi();

                        

                            foreach ($lst->findAll() as $tr) {
                                ?>
                                <tr>
                                    
                                    <td ><?php echo $tr->getId(); ?></td>
                                    <td><?php echo $tr->getTypetournoi(); ?></td>
                                    <td><?php echo $tr->getNomjoueur(); ?> <?php echo $tr->getPrenomjoueur(); ?></td>
                                    <td><?php echo $tr->getDatetournoi(); ?></td>
                                    <td><?php echo $tr->getScore(); ?></td>
                                    <td><button onClick="gestiontournoiup(<?php echo $tr->getId(); ?>,'<?php echo $tr->getTypetournoi(); ?>','<?php echo $tr->getNomjoueur(); ?>','<?php echo $tr->getPrenomjoueur(); ?>','<?php echo $tr->getDatetournoi(); ?>',<?php echo $tr->getScore(); ?>);">Modifie</button></td>
                                    <td><button><a href="controller/GestionTournoi.php?submit=Supprimer&id=<?php echo $tr->getId(); ?>">Supprimer</a></button></td>
                                   
                                 </tr>
                                <?php
                            }
                        ?>
                    </form
                    </tbody>
                </table>

            </fieldset>
        
        </div>
    </body>
</html>
