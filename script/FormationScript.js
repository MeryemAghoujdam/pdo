/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function f(_Id,_Nom,_DateDep,_DateFin,_Location){
    var Id = document.getElementById("num"),
        Nom = document.getElementById("Nom"),
        DateDep = document.getElementById("DateDep"),
        DateFin = document.getElementById("DateFin"),
        Location  = document.getElementById("Location"),
        op = document.getElementById("op"),
        save = document.getElementById("save");
    save.value="Modifier";
    op.value="update";
    Id.value=_Id;
    Nom.value=_Nom;
    DateDep.value=_DateDep;
    DateFin.value=_DateFin;
    Location.value = _Location;
}