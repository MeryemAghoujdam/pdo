<!DOCTYPE HTML>
<?php
include_once './service/VoitureService.php';
?>
<html>
    <head>
        <title>Gestion Voiture</title>
        <link href="css/StyleVoiture.css" rel="stylesheet" type="text/css"/>
        <script src="script/voitureScript.js" type="text/javascript"></script>
    </head>
    <body>
        <form id="form" method="GET" action="controller/voitureController.php">
            <span class="Msg">Gestion Voitures</span>
            <input type="text" class="input" id="marque" name="marque" placeholder="Marque"/>
            <input type="text" class="input" id="serie" name="serie" placeholder="Série"/>
            <input type="text" class="input" id="prix" name="prix" placeholder="Prix"/>
            <select class="input" id="type" name="type">
                <option value="Null">Choisir un type de carburant</option>
                <option value="Essence">Essence</option>
                <option value="Diesel">Diesel</option>
            </select>
            <input type="text" class="input" id="puissance" name="puissance" placeholder="Puissance"/>
            <input type="hidden" id="id" name="id"/>
            <input type="hidden" id="ops" name="ops" value="insert">
            <input type="submit" id="sub" value="Add"/>
        </form>
        <?php
            $VS = new VoitureService();
            if(count($VS->findAll())>0){
        ?>
        <table border="0" id="Voitures">
                <thead>
                    <tr>
                        <th>Marque</th>
                        <th>Série</th>
                        <th>Prix</th>
                        <th>Puissance</th>
                        <th>Type</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $VS = new VoitureService();
                    foreach ($VS->findAll() as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->getMarque()?></td>
                        <td><?php echo $v->getSerie()?></td>
                        <td><?php echo $v->getPrix()?></td>
                        <td><?php echo $v->getPuissance()?></td>
                        <td><?php echo $v->getType()?></td>
                        <td><a class="BTN update" onclick="LoadToInputs('<?php echo $v->getId()?>','<?php echo $v->getSerie()?>','<?php echo $v->getMarque()?>','<?php echo $v->getPrix()?>','<?php echo $v->getPuissance()?>','<?php echo $v->getType()?>')">Modifier</a></td>
                        <td><a class="BTN delete" href="controller/voitureController.php?ops=delete&id=<?php echo $v->getId()?>">supprimer</a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php } ?>
    </body>
</html>