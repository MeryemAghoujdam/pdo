<!DOCTYPE HTML>
<html>
    <head>
        <title>Gestion Voiture</title>
        <link href="css/StyleVoiture.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form id="form" method="GET" action="controller/voitureController.php">
            <span class="Msg">Gestion Voitures</span>
            <input type="text" class="input" id="marque" name="marque" placeholder="Marque"/>
            <input type="text" class="input" id="serie" name="serie" placeholder="Série"/>
            <input type="text" class="input" id="prix" name="prix" placeholder="Prix"/>
            <input type="text" class="input" id="type" name="type" placeholder="Type"/>
            <input type="text" class="input" id="puissance" name="puissance" placeholder="Puissance"/>
            <input type="hidden" id="id" name="id"/>
            <input type="hidden" id="ops" name="ops" value="insert">
            <input type="submit" id="sub" value="Add"/>
        </form>
        <table border="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Série</th>
                        <th>Marque</th>
                        <th>Prix</th>
                        <th>Puissance</th>
                        <th>Type</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button>Modifier</button></td>
                        <td><</td>
                    </tr>
                </tbody>
            </table>
    </body>
</html>