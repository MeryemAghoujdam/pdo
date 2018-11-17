
function f(_id,_nom,_prenom,_daten,_tele,_email) {
    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier Stagiaire";
    var op = document.getElementById("op");
    op.value = "update";
    var id = document.getElementById("num");
    id.value = _id;
    var nom = document.getElementById("nom");
    nom.value = _nom;
    var prenom = document.getElementById("prenom");
    prenom.value = _prenom;
    var tele = document.getElementById("tele");
    tele.value = _tele;
    var daten = document.getElementById("daten");
    daten.value = _daten;
    var email = document.getElementById("email");
    email.value = _email;
    
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    console.log("Vous avez cliqué sur modifier");

}



