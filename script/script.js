
function f(a, b) {


    var nom = document.getElementById("nom");
    nom.value = b;
    var op = document.getElementById("op");
    op.value = "update";
    
    var id = document.getElementById("num");
    id.value = a;
    
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    console.log("Vous avez cliqué sur modifier");

} 


function stagiaireModification(_id,_nom,_prenom,_daten,_tele,_email) {
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


}

function profilModification(_id,_libelle,_code) {

    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier Profil";
    
    var id = document.getElementById("id");
    id.value = _id;
    var libelle = document.getElementById("libelle");
    libelle.value = _libelle;
    
    var code = document.getElementById("code");
    code.value = _code;
    
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    var op = document.getElementById("op");
    op.value = "update";

}


function gestionRestaurant(_id,_nom,_nbrtable,_adresse,_tele,_nbretoile) {
    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier Restaurant";
    var op = document.getElementById("op");
    op.value = "update";
    var id = document.getElementById("num");
    id.value = _id;
    var nom = document.getElementById("nom");
    nom.value = _nom;
    var nbrtable = document.getElementById("nbrtable");
    nbrtable.value = _nbrtable;
    var tele = document.getElementById("tele");
    tele.value = _tele;
    var adresse = document.getElementById("adresse");
    adresse.value = _adresse;
    var nbretoile = document.getElementById("nbretoile");
    nbretoile.value = _nbretoile;
    
    var save = document.getElementById("save");
    save.value ="Modifier";
   
}
