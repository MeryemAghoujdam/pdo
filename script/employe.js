function f(_id,_cin,_nom,_prenom,_tele,_salaire) {
    
    
    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier Employe";
    var op = document.getElementById("op");
    op.value = "update";
    var id = document.getElementById("num");
    id.value = _id;
    var cin = document.getElementById("cin");
    cin.value = _cin;
    var nom = document.getElementById("nom");
    nom.value = _nom;
    var prenom = document.getElementById("prenom");
    prenom.value = _prenom;
    var tele = document.getElementById("tele");
    tele.value = _tele;
    var salaire = document.getElementById("salaire");
    salaire.value = _salaire;
    
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    console.log("Vous avez cliqué sur modifier");
 }