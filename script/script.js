
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





