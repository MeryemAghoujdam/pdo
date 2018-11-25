/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function LoadToInputs(Id,Serie,Marque,Prix,Puissance,Type){
    var id = document.getElementById("id"),
        serie = document.getElementById("serie"),
        marque = document.getElementById("marque"),
        prix = document.getElementById("prix"),
        type = document.getElementById("type"),
        puiss = document.getElementById("puissance"),
        ops = document.getElementById("ops"),
        sub = document.getElementById("sub");
    sub.value="Modifier";
    ops.value="update";
    id.value=Id;
    serie.value=Serie;
    marque.value=Marque;
    prix.value=Prix;
    type.value = Type;
    puiss.value=Puissance;
}
function LoadToInputs(Id,Nom,Prenom,Tel,Salaire,Login,Pass,Profile){
    var id = document.getElementById("id"),
        nom = document.getElementById("Nom"),
        prenom = document.getElementById("Prenom"),
        tel = document.getElementById("Tel"),
        sal = document.getElementById("Sal"),
        login = document.getElementById("Login"),
        pass = document.getElementById("Pass"),
        profil = document.getElementById("Profile"),
        ops = document.getElementById("ops"),
        sub = document.getElementById("sub");
    sub.value="Modifier";
    ops.value="update";
    id.value=Id;
    nom.value=Nom;
    prenom.value=Prenom;
    tel.value=Tel;
    sal.value = Salaire;
    login.value=Login;
    pass.value=Pass;
    profil.value=Profile;
}