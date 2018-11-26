
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


function entrepriseModification(_id,_nom,_adresse,_nombreDeSalarie,_numTel) {

    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier Profil";
    
    var id = document.getElementById("id");
    id.value = _id;
    var nom = document.getElementById("nom");
    nom.value = _nom;
    
    var adresse = document.getElementById("adresse");
    adresse.value = _adresse;
    
    var nombreDeSalarie = document.getElementById("nombreDeSalarie");
    nombreDeSalarie.value = _nombreDeSalarie;
    
    var numTel = document.getElementById("numTel");
    numTel.value = _numTel;
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    var ops = document.getElementById("ops");
    ops.value = "update";

}

function gestiontournoiup(idt,typ,nm,prm,dt,scr) {
    var id=document.getElementById("idtourn");
    
    id.value=idt;
   
    var tp=document.getElementById("typrtr");
    tp.value=typ;
    var nom=document.getElementById("nomjr");
    nom.value=nm;
    var prenom=document.getElementById("prenomjr");
    prenom.value=prm;
    var dttrn=document.getElementById("datetournoi");
    dttrn.value=dt;
    var scor=document.getElementById("score");
    scor.value=scr;
    
    var btn=document.getElementById("submit");
    btn.value="Modifie";
    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier Stagiaire";
    
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