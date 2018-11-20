function updateMatiere(p1,p2,p3,p4,p5){
    
    var id = document.getElementById("ID"),
     nom = document.getElementById("nom"),
     coef = document.getElementById("coef"),
     nombreHeures = document.getElementById("nombreHeures"),
     abreviation = document.getElementById("abreviation");
    
    var submit = document.getElementById("submit");
    
    id.value = p1;
    nom.value = p2;
    coef.value = p3;
    nombreHeures.value=p4;
    abreviation.value=p5;
    
    submit.value="modifier";
    
    var trait = document.getElementById("trait");
    trait.value="modifier";
}
function deleteMatiere(p1,p2,p3,p4,p5){
    if(confirm("voulez vous vraiment supprimer ?")){
        var id = document.getElementById("ID"),
     nom = document.getElementById("nom"),
     coef = document.getElementById("coef"),
     nombreHeures = document.getElementById("nombreHeures"),
     abreviation = document.getElementById("abreviation");
    
    var submit = document.getElementById("submit");
    
    id.value = p1;
    nom.value = p2;
    coef.value = p3;
    nombreHeures.value=p4;
    abreviation.value=p5;
    
    submit.value="supprimer";
    
    var trait = document.getElementById("trait");
    trait.value="supprimer";
    }
     
}
function testFunction(){
    alert("Hello");
}
