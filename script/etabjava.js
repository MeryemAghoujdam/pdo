function f(_id,_nom,_adresse,_type,_capacite) {
    
    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier Etablissement";
    var op = document.getElementById("op");
    op.value = "update";
    var id = document.getElementById("id");
    id.value = _id;
    var nom = document.getElementById("nom");
    nom.value = _nom;
    var adresse = document.getElementById("adresse");
    adresse.value = _adresse;
    var type = document.getElementById("type");
    type.value = _type;
    var capacite = document.getElementById("capacite");
    capacite.value = _capacite;
    
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    console.log("Vous avez cliquez sur modifier");

}


