/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function f(Id,Nom,Capacite,Adresse,NombreDeSalle,NumTel) {
    
    var id = document.getElementById("id"),
        nom = document.getElementById("nom"),
        capacite = document.getElementById("capacite"),
        adresse = document.getElementById("adresse"),
        nombreDeSalle = document.getElementById("nombreDeSalle"),
        numTel = document.getElementById("numTel"),
        ops = document.getElementById("ops"),
        sub = document.getElementById("sub");

    sub.value="Modifier";
    ops.value="update";
    id.value=Id;
    nom.value=Nom;
    capacite.value=Capacite;
    adresse.value=Adresse;
    nombreDeSalle.value = NombreDeSalle;
    numTel.value=NumTel;
   
    console.log("Vous avez cliqué sur modifier");
}
