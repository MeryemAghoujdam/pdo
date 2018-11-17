

function f(_id,_adresse,_nbrappartement,_nompropriétaire,_entrepriseconstruction,_dateconstruction) {
    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier Immeuble";
    var op = document.getElementById("op");
    op.value = "update";
    var id = document.getElementById("num");
    id.value = _id;
    var nom = document.getElementById("adresse");
    nom.value = _adresse;
    var prenom = document.getElementById("nbrappartement");
    prenom.value = _nbrappartement;
    var tele = document.getElementById("nomPropriétaire");
    tele.value = _nompropriétaire;
    var daten = document.getElementById("entrepriseconstruction");
    daten.value = _entrepriseconstruction;
    var email = document.getElementById("dateconstruction");
    email.value = _dateconstruction;
    
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    console.log("Vous avez cliqué sur modifier");

}

