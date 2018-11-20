function f(_id,_nom,_note,_coefficient,_periode) {
    
    var legend = document.getElementById("legend1");
    legend.innerText = "Modifier Module";
    
    var op = document.getElementById("op");
    op.value = "update";
    
    var id = document.getElementById("num");
    id.value = _id;
    
    var nom = document.getElementById("nom");
    nom.value = _nom;
    
    var note = document.getElementById("note");
    note.value = _note;
    
    var coefficient = document.getElementById("coefficient");
    coefficient.value = _coefficient;
    
    var periode = document.getElementById("periode");
    periode.value = _periode;
    
    
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    console.log("Vous avez cliqué sur modifier");

}
