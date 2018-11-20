
function f(a, b, c, d, e) {


    var titre = document.getElementById("titre");
    titre.value = b;
    var op = document.getElementById("op");
    op.value = "update";
    
   var id = document.getElementById("id");
    id.value = a;
    
    var auteur = document.getElementById("auteur");
    auteur.value = c;
    
    var prix = document.getElementById("prix");
    prix.value = d;
    
    var nbpage = document.getElementById("nbpage");
    nbpage.value = e;
    
    var save = document.getElementById("save");
    save.value ="Modifier";
    
    console.log("Vous avez cliqué sur modifier");

} 
